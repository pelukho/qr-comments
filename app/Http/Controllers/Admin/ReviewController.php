<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReviewResponse;
use App\Models\Reviews;
use App\Notifications\ResponseNotification;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $currentUser = auth()->user();

        if ($currentUser->is_admin) {
            $reviews = Reviews::with('reviewGroup')
                ->orderByDesc('created_at')
                ->paginate(10);
        } else {
            $availableCategories = [];
            $reviews = $currentUser->reviewGroup()->get();

            if(count($reviews) > 0) {
                foreach ($reviews as $item) {
                    $availableCategories[] = $item->id;
                }
            }

            $reviews = Reviews::with('reviewGroup')
                ->whereIn('review_group_id', $availableCategories)
                ->orderByDesc('created_at')
                ->paginate(10);
        }

        return view('reviews.index', compact('reviews', $reviews));
    }

    /**
     * Display the specified resource.
     *
     * @param Reviews $review
     * @return Renderable
     */
    public function show(Reviews $review)
    {
        if($review->review_status) {
            $reviewResponse = ReviewResponse::where('review_id', $review->id)
                ->with(['user', 'review'])
                ->first();

            return view('reviews.show', ['review' => $review, 'reviewResponse' => $reviewResponse]);
        }

        return view('reviews.show', compact('review'));
    }

    /**
     * Changing status of the review to 1 - replied
     * Creating response record
     * Sending reply to user.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => ['required'],
            'review_id' => ['required', 'integer'],
        ]);

        $validated['user_id'] = auth()->user()->id;

        $review = Reviews::find($request->review_id);
        $review->review_status = 1;

        $review->save();
        ReviewResponse::create($validated);

        Notification::route('mail', $review->review_author_email)
            ->notify(new ResponseNotification($review->review_author, $request->body));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Reviews $review
     * @return RedirectResponse
     */
    public function destroy(Reviews $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }
}
