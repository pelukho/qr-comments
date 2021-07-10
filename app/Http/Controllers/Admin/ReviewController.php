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
        $reviews = Reviews::query()->paginate(10);

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
