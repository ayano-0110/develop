{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'マイページ'を埋め込む --}}
@section('title', 'マイページ')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h3>マイページ</h3>
        <!-- 本棚ボックス -->
        <div class="bookshelf-box">
            <a href="{{ route('bookshelf') }}" class="btn">本棚</a>
        </div>
    </div>

    <style>
        /* 本棚ボックスのデザイン */
        .bookshelf-box {
            width: 200px; /* 幅を設定 */
            padding: 30px; /* 内側の余白 */
            background-color: #E6E6FA; /* 背景色 */
            border-radius: 10px; /* 角を丸く */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 影を追加 */
            text-align: center;
            
            
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