<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = auth()->user();

        if ($currentUser->is_admin) {
            $reviews = Reviews::with('reviewGroup')->orderByDesc('created_at')->paginate(10);
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Reviews $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Reviews $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index');
    }
}
