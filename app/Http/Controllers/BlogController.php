<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'cat_1' => 'nullable|string',
            'cat_2' => 'nullable|string',
            'cat_3' => 'nullable|string',
            'cat_4' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);


        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'cat_1' => $request->cat_1,
            'cat_2' => $request->cat_2,
            'cat_3' => $request->cat_3,
            'cat_4' => $request->cat_4,
            'img' => $request->hasFile('img') ? $request->file('img')->store('images', 'public') : null,
            'user_id' => Auth::user()->id,
        ]);


        return redirect(route('blog.index'))->with('message', 'Article Posted.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id); 
        return view('blog.show', compact('blog'));
    }
}
