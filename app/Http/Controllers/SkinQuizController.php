<?php

namespace App\Http\Controllers;

use App\Models\SkinResult;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class SkinQuizController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }


    public function index()
    {
        return view('quiz.index');
    }

    public function saveResult(Request $request)
    {
        $request->validate([
            'skin_type' => 'required|string|max:50'
        ]);

        SkinResult::create([
            'skin_type' => $request->input('skin_type')
        ]);

        return response()->json(['message' => 'Result saved!']);
    }
}
