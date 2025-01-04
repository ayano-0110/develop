<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TopController extends Controller
{
    public function add()
    {
        // ユーザーがログインしているかどうかを確認
        if (Auth::check()) {
            // ログインしている場合、「/booktop」へリダイレクト
            return redirect('/booktop');
        }

        // ログインしていない場合は、通常の処理を行う
        // 例えば、ビューを返すなど
        return view('top.top');
    }
}
