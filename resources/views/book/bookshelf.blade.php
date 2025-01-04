{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本棚'を埋め込む --}}
@section('title', '本棚を表示')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h3>本棚</h3>
        <!-- 本を登録するボックス -->
        <div class="bookshelf-box">
            <a href="{{ route('bookregister') }}" class="btn">登録</a>
        </div>
    </div>

    <style>
        /* 本の登録ボックスのデザイン */
        .bookshelf-box {
            width: 200px; /* 幅を設定 */
            height: 250px; /* 高さ*/
            padding: 30px; /* 内側の余白 */
            background-color: #F8F8FF; /* 背景色 */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 影を追加 */
            text-align: center;
            display: flex; /* フレックスボックスを使用 */
            flex-direction: column; /* 子要素を縦に並べる */
            justify-content: center; /* 縦方向の中央揃え */
            align-items: center; /* 横方向の中央揃え */
        }

        .bookshelf-box h3 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .bookshelf-box .btn {
            margin-top: 15px;
        }

    </style>



@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
    @endforeach
        </ul>
    @endif
@endsection