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

//↓createじゃない？
    public function create(Request $request)//ページ内を編集するからcreate
    {
        $this->validate($request, Book::$rules);//バリデーションを行う
        $book = new Book;//合ってる？
        $form = $request->all();

        // データベースに保存する
        $book->fill($form);//ここも合ってる？
        $book->save();

        // booktopにリダイレクトする
        return redirect('booktop');//(book.booktop)になるのか？
    }
}



//('book.create')であっているのか、そもそもコントローラーの中に何を書けばいいのかわからない
