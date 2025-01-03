{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'マイページ'を埋め込む --}}
@section('title', 'マイページ')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h1>{{ __('messages.mypage') }}</h1>
        <p>{{ __('messages.welcome') }} {{ Auth::user()->name }}!</p>

        <!-- 本棚ボックス -->
        <div class="bookshelf-box">
            <h3>本棚</h3>
            <a href="{{ route('bookshelf') }}" class="btn btn-primary">本棚を表示</a>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* 本棚ボックスのデザイン */
        .bookshelf-box {
            width: 300px; /* 幅を設定 */
            padding: 20px; /* 内側の余白 */
            background-color: #f7f7f7; /* 背景色 */
            border-radius: 10px; /* 角を丸く */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 影を追加 */
            text-align: center;
        }

        .bookshelf-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .bookshelf-box .btn {
            margin-top: 15px;
        }
    </style>


//↓バリデーションでエラー発見した時にエラーを格納するために必要な記述
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

//ここまで
            </div>
        </div>
    </div>
@endsection