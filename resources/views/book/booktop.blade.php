{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'マイページ'を埋め込む --}}
@section('title', 'マイページ')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<div class="container">
  <div class="row">
    <!-- 1つ目のボックス -->
    <div class="col-md-6 mb-4">
     <a href="{{ route('bookshelf') }}" class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-danger bg-gradient rounded d-flex justify-content-center align-items-center" style="min-height: 200px;">
       <span class="fs-4 text-white">My本棚</span>
      </div>
     </a>
    </div>
    <!-- 2つ目のボックス -->
    <div class="col-md-6 mb-4">
      <div class="box p-3 border bg-warning bg-gradient rounded d-flex justify-content-center align-items-center" style="min-height: 200px;">
       <span class="fs-4 text-white">検索</span>
      </div>
    </div>
  </div>
  <div class="row">
    <!-- 3つ目のボックス -->
    <div class="col-md-6 mb-4">
      <div class="box p-3 border bg-success bg-gradient rounded d-flex justify-content-center align-items-center" style="min-height: 200px;">
       <span class="fs-4 text-white">古本を探す</span>
      </div>
    </div>
    <!-- 4つ目のボックス -->
    <div class="col-md-6 mb-4">
      <div class="box p-3 border bg-primary bg-gradient rounded d-flex justify-content-center align-items-center" style="min-height: 200px;">
       <span class="fs-4 text-white">チャット</span>
      </div>
    </div>
  </div>
</div>


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
      margin-top: 50px; /* 上下のマージンを調整 */
    }
    
    /* 横線の下に配置する文字のスタイル */
    .text-below {
      text-align: left; /* 中央にテキストを配置 */
      font-size: 15px; /* 文字の大きさ */
      color: #333; /* 文字色 */
      margin-left: 10px;
    }
  </style>
</head>
 <body>
  <hr> <!-- 横線 -->
   <div class="text-below">〜月間ランキング〜</div>
 </body>
</html>

@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
    @endforeach
        </ul>
    @endif
@endsection