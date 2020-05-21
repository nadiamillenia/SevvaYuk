<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;

class RatingController extends Controller
{
    public function formRating(Request $request, $id_produxt)
    {
        return view('pages.rating.rating');
    }

    public function createRating(Request $request, $store_id)
    {
        $rating = [
            'rating_star' => $request->input('rating'),
            'store_id' => $store_id,
            'user_id' => 1, // temporary value
            'rating_comment' => $request->input('rating_comment')
        ];

        Rating::create($rating);

        return view('pages.rating.rating-finish');
    }
}
