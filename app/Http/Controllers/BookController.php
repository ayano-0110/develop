<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function add()
    {
        return view('book.booktop');
    }

    public function select()
    {
        return view('book.bookshelf');
    }

    public function create()
    {
        return view('book.bookregister');
    }

    public function search()
    {
        return view('book.booksearch');
    }


    public function store(Request $request)
    {
        // バリデーション?
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);


        // 本を保存する処理
        // 例えば、Bookモデルを使ってDBに保存する場合：
        // Book::create($request->all());

        

        // booktopにリダイレクトする
        //return redirect('book.bookshelf');//合ってる？
    }
}