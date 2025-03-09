<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SkinResult;

class SkinQuizController extends Controller
{
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

        return response()->json(['message' => 'Risultato salvato con successo!']);
    }
}