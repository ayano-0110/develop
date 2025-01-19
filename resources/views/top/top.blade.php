{{-- layouts/toppage.blade.phpを読み込む --}}
@extends('layouts.toppage')


{{-- toppage.blade.phpの@yield('title')に'Book Record'を埋め込む --}}
@section('title', 'Book Record')

{{-- toppage.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <div class="container">
  <div class="row d-flex flex-column">
    <!-- 1つ目のボックス -->
    <div class="col-md-12 mt-4 mb-4">
     <a href="{{ route('login') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center rounded" >
       <span class="fs-6 text-dark">ログイン</span>
      </div>
     </a>
    </div>

    <p class="text-center my-3">ログインまたは新規登録</p>

    <!-- 2つ目のボックス -->
    <div class="col-md-12 mt-4 mb-4">
     <a href="{{ route('register') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center rounded" >
       <span class="fs-6 text-dark">新規登録</span>
      </div>
     </a>
    </div>
  </div>
  </div>
  <hr> <!-- 横線 -->
   <div class="text-below">Book Record とは？</div>
 </body>
 </body>
</html>


@endsection

//なぜコメントにならないのか、なぜGETなのか