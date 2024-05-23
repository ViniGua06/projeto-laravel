<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    function firstPage () {
        return view('welcome');
    }

    function index () {
        $word = Word::get();
        return view('showWords')->with('words', $word);
    }

    function create () {
        return view('insertWord');
    }

    function store (Request $req) {
        $word = new Word();
        $word->nome = $req->nome;
        $word->significado = $req->significado;

        $word->save();

        return redirect()->route('getWords');
    }

    
}
