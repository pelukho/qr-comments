<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewGroupRequest;
use App\Models\ReviewGroup;
use Illuminate\Http\Request;

class ReviewGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = ReviewGroup::with('reviews')->paginate(10);

        return view('categories.index', compact('categories', $categories));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReviewGroupRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(StoreReviewGroupRequest $request)
    {
        ReviewGroup::create($request->validated());

        return redirect()->route('admin.review_categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ReviewGroup $category
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewGroup $reviewGroup)
    {
        return view('categories.edit', compact('reviewGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreReviewGroupRequest $request
     * @param ReviewGroup $reviewGroup
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReviewGroupRequest $request, ReviewGroup $reviewGroup)
    {
        $reviewGroup->update($request->validated());

        return redirect()->route('admin.review_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ReviewGroup $reviewGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewGroup $reviewGroup)
    {
        $reviewGroup->delete();

        return redirect()->route('admin.review_categories.index');
    }
}
