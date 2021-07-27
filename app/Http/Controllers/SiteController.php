<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Notifications\HightRatingNotification;
use App\Notifications\LeaveReviewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Http\Response
     */
    public function index($locale = 'ru')
    {
        App::setLocale($locale);

        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'review_author' => ['required', 'max:100'],
            'review_author_phone' => ['required'],
            'review_author_email' => ['required', 'email:filter'],
            'review_content' => ['required'],
            'review_rating' => ['required'],
            'review_group_id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        }

        $review = new Reviews();

        $review->review_author = $request->review_author;
        $review->review_author_phone = $request->review_author_phone;
        $review->review_author_email = $request->review_author_email;
        $review->review_content = htmlspecialchars($request->review_content);
        $review->review_rating = (int) $request->review_rating;
        $review->review_group_id = (int) $request->review_group_id;

        if(abs($request->review_rating) === 5) {
            $review->review_status = 1;

            Notification::route('mail', $review->review_author_email)
                ->notify(new HightRatingNotification($review->review_author));
        }

        $saved = $review->save();

        $review->notify(new LeaveReviewNotification($review->id));

        return response()->json(['saved' => $saved]);
    }
}
