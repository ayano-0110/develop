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
        //dd($request->input('thumbnail_url'));
        $request->validate([
            'title' => 'required|string',//必須
            'author' => 'required|string',
            'summary' => 'nullable|string',//空欄でもOK
            'impression' => 'nullable|string',
            'memo' => 'nullable|string',
            'thumbnail_url' => 'nullable|string',
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
            'image_path' => $request->input('thumbnail_url'),
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
     
        // BookShelf Modelからデータを取得する
        $book = BookShelf::find($request->id);
        if (empty($book)) {
            abort(404);
        }
        return view('book.booksearch', ['book' => $book]);
    }



    // 登録した本の情報を表示
    public function show($id)
    {
        $book = BookShelf::findOrFail($id);
        return view('book.booksearch', compact('book'));
    }


    public function delete(Request $request)
    {
        // 該当する Modelを取得
        $book = BookShelf::find($request->id);

        // 削除する
        $book->delete();

        return redirect('bookshelf');
    }


    
    public function edit(Request $request)
    {
        
        // Validationをかける
        //$this->validate($request, BookShelf::$rules);
        // BookShelf Modelからデータを取得する
        $book = BookShelf::find($request->id);
        if (empty($book)) {
            abort(404);
        }
        return view('book.bookedit', ['book_form' => $book]);
    }



    public function update(Request $request)
    {
        // BookShelf Modelからデータを取得する
        $book = BookShelf::find($request->id);
        // 送信されてきたフォームデータを格納する
        $book_form = $request->all();

        if ($request->remove == 'true') {
            $book_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/images/no.image.png');
            $book_form['image_path'] = basename($path);
        } else {
            $book_form['image_path'] = $book->image_path;
        }

        unset($book_form['image']);
        unset($book_form['remove']);
        unset($book_form['_token']);

        // 該当するデータを上書きして保存する
        $book->fill($book_form)->save();

        return redirect()->route('booksearch.search', ['id' => $book->id]);//id?
    }



}



        // 本を保存する処理
        // 例えば、Bookモデルを使ってDBに保存する場合：
        // Book::create($request->all());

    