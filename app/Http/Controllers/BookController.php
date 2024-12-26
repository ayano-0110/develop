<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function add()
    {
        return view('book.create');
    }
}

//('book.create')であっているのか、そもそもコントローラーの中に何を書けばいいのかわからない
