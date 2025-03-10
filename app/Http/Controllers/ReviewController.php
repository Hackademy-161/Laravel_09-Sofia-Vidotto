<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class ReviewController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
            // new Middleware('auth', except: ['index'])
        ];
    }

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
