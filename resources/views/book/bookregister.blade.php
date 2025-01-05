{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本を登録する'を埋め込む --}}
@section('title', '本を登録する')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h3>本を登録する</h3>
        <!-- 本の情報を登録するボックス -->
        <div class="bookshelf-box">
            <a href="{{ route('booksearch') }}" class="btn">検索して登録</a>
        </div>
    </div>

    <style>
        /* 本の情報を登録するボックスのデザイン */
        .bookshelf-box {
            width: 100px; /* 幅を設定 */
            height: 150px; /* 高さ*/
            padding: 3px; /* 内側の余白 */
            background-color: #F8F8FF; /* 背景色 */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 影を追加 */
            text-align: center;
            display: flex; /* フレックスボックスを使用 */
            flex-direction: column; /* 子要素を縦に並べる */
            justify-content: center; /* 縦方向の中央揃え */
            align-items: center; /* 横方向の中央揃え */
            
        }

        .bookshelf-box h3 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .bookshelf-box .btn {
            margin-top: 15px;
        }

    </style>



        <form method="POST" action="{{ route('bookregister') }}">
            @csrf

            <div class="form-group">
                <label for="title">本のタイトル</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">著者</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">あらすじ</label>
                <textarea id="description" name="description" rows="3" cols="50" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="description">感想・メモ</label>
                <textarea id="description" name="description" rows="3" cols="50" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
@endsection