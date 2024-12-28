<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//memo.->middleware('auth');付け足すことでログインしてない状態で管理画面にアクセスした時,
//ログイン画面にリダイレクトするように設定できる！忘れないようにとりあえず追加する部分まとめて下記に記載しておく。
//Route::controller(TopController::class)->prefix('top')->group(function() {
   // Route::get('top/create', 'add')->middleware('auth');
//});
//->prefix,->groupの意味がわからない



Route::controller(App\Http\Controllers\TopController::class)->group(function() {
    Route::get('/', 'add');
});

Route::controller(App\Http\Controllers\BookController::class)->group(function() {
    Route::get('booktop', 'add')->middleware('auth');
});
//↑グループ化しようとしたらエラー出た