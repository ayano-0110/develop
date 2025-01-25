{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本棚'を埋め込む --}}
@section('title', '本棚を表示')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>横線とテキスト</title>
  <style>
    /* 横線のスタイル */
    hr {
      border: 0;
      border-top: 2px solid #000; /* 黒い太さ2pxの線 */
    }
    
    /* 横線の下に配置する文字のスタイル */
    .text-below {
      text-align: left; /* 左にテキストを配置 */
      font-size: 15px; /* 文字の大きさ */
      color: #333; /* 文字色 */
      margin-left: 10px;
    }
  </style>
</head>


 <body>
  <hr> <!-- ジャンル登録のページへ飛ぶ -->
  <div class="container">
  <div class="row">
    <!-- 1つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('book.bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 2つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('book.bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 3つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('book.bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 4つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('book.bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
   </div>
  </div>
  <hr> 
 </body>
</html>


<div class="container">
    <p>編集済み</p>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                
                                <div class="title p-2">
                                    <h1>{{ Str::limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ Str::limit($headline->body, 650) }}</p>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('booksearch', ['id' => $headline->id]) }}">詳細</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->body, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ secure_asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('news.detail', ['id' => $post->id]) }}">詳細</a>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection









  