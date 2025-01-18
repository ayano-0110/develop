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
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 2つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 3つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" >
       <span class="fs-6 text-dark">ジャンル</span>
      </div>
     </a>
    </div>
    <!-- 4つ目のボックス -->
    <div class="col-md-3 ">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
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
  <div class="row">
    <!-- 1つ目のボックス -->
    <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
    <!-- 2つ目のボックス -->
    <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
    <!-- 3つ目のボックス -->
    <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
    <!-- 4つ目のボックス -->
    <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
     <!-- 5つ目のボックス -->
     <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
     <!-- 6つ目のボックス -->
     <div class="col-md-4 mb-4">
     <a href="{{ route('bookregister') }}"  class="d-block" style="text-decoration: none;">
      <div class="box p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px;">
       <span class="fs-4 text-dark">登録</span>
      </div>
     </a>
    </div>
  </div>
</div>


@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
    @endforeach
        </ul>
    @endif
@endsection