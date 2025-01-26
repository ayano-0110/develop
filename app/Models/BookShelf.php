<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookShelf extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'author', 'summary', 'impression', 'memo', 'image_path', 'genre_id'];

    protected $guarded = array('id');//バリデーション（データ登録する前に不完全でないかチェックする）

    public static $rules = array(
        'title' => 'required',
        'author' => 'required',
        'summary'  => 'nullable',
        'impression'  => 'nullable',
        'memo'  => 'nullable',
        'image_path'  => 'nullable',
        'genre_id'  => 'required',
    );
}

//このモデルはユーザー登録？（TOP）の分も必要になるのか？まず登録画面はtopコントローラー管理でいいのか？データベース確認する
