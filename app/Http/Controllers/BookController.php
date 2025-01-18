<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\BookShelf;

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

    public function sort()
    {
        return view('book.bookgenre');
    }

///
    // 登録フォームを表示する
    public function showForm()
    {
        return view('book.booksearch');
    }

    // 本の情報を保存する
    public function register(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'summary' => 'nullable|string',
            'impression' => 'nullable|string',
            'memo' => 'nullable|string',
            'image_path' => 'nullable|string',
            'enre_id' => 'required|string',
        ]);

        // データを保存
        $book = BookShelf::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'summary' => $request->input('summary'),
            'impression' => $request->input('impression'),
            'memo' => $request->input('memo'),
            'image_path' => $request->input('image_path'),
            'genre_id' => $request->input('genre_id'),
        ]);

        // 登録後に詳細ページへリダイレクト
        return redirect()->route('book.bookregister', ['book' => $book->id]);
    }

    // 登録した本の情報を表示
    public function show($id)
    {
        $book = BookShelf::findOrFail($id);
        return view('book.show', compact('book'));
    }
}
///

    // public function store(Request $request)
    // {
    //     // バリデーション?
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'author' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //     ]);


        // 本を保存する処理
        // 例えば、Bookモデルを使ってDBに保存する場合：
        // Book::create($request->all());

        

        // booktopにリダイレクトする
        //return redirect('book.bookshelf');//合ってる？
//     }
// }