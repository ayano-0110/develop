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

    // public function select()
    // {
    //     return view('book.bookshelf');
    // }

    public function create()
    {
        return view('book.bookregister');
    }

    // public function search()
    // {
    //     return view('book.booksearch');
    // }

    public function sort()
    {
        return view('book.bookgenre');
    }

///
    // 登録フォームを表示する
    // public function showForm()
    // {
    //     return view('book.booksearch');
    // }

    // 本の情報を保存する
    public function register(Request $request)
    {
        $request->validate([
            'title' => 'required|string',//必須
            'author' => 'required|string',
            'summary' => 'nullable|string',//空欄でもOK
            'impression' => 'nullable|string',
            'memo' => 'nullable|string',
            'image_path' => 'nullable|string',
            'genre_id' => 'nullable|string',
            // 'user_id' => 'required|integer|exists:users,id|in:' . auth()->id(),

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
            'user_id' => auth()->id(),
        ]);

        // 登録後に詳細ページへリダイレクト
        return redirect()->route('bookshelf.select', ['book' => $book->id]);
    }


    public function select(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = BookShelf::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = BookShelf::all();
        }
        return view('book.bookshelf', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function search(Request $request)
    {
        $book = new BookShelf;
        // BookShelf Modelからデータを取得する
        $book = BookShelf::find($request->id);
        if (empty($book)) {
            abort(404);
        }
        return view('book.booksearch', ['book_form' => $book]);
    }


    // 登録した本の情報を表示
    public function show($id)
    {
        $book = BookShelf::findOrFail($id);
        return view('book.booksearch', compact('book'));
    }
}



        // 本を保存する処理
        // 例えば、Bookモデルを使ってDBに保存する場合：
        // Book::create($request->all());

    