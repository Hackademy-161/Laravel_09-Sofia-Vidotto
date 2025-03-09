<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('review.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        Review::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'title' => $request->title,
            'rating' => $request->rating,
        ]);

        return redirect(route('review.index'))->with('message', 'Comment sent.');
    }
}
