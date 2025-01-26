@extends('layouts.book')

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
    <p>My本棚</p>
        <!-- <div class="row">
            <div class="posts col-md-8 mx-auto mt-3"> -->
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                           <div class="box p-3 mb-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 250px; width: 200px;">
                             <span class="fs-6 text-dark">
                                <div class="title">
                                    {{ Str::limit($post->title, 150) }}
                                </div>
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->body, 1500) }}
                                </div>
                                <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ secure_asset('storage/image/' . $post->image_path) }}">
                                @endif
                                </div>
                                <div class="col-md-6">
                                  <a href="{{ route('booksearch.search', ['id' => $post->id]) }}">詳細</a>
                                </div>
                                <div class="mt-3">
                        <form action="{{ route('delete.delete', ['id' => $post->id]) }}" method="GET">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">ボックスを削除</button>
                        </form>
                    </div>

                              
                             </span>
                            </div>
                        </div>
                    </div>
                @endforeach


                


                <div class="container">
                  <div class="row">
                    <!-- 登録ボックス -->
                    <div class="mb-4">
                     <a href="{{ route('book.bookregister') }}"  class="d-block" style="text-decoration: none;">
                      <div class="box p-3 mb-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 50px;">
                        <span class="fs-6 text-dark">登録する</span>
                      </div>
                     </a>
                    </div>
                  </div>
               </div>

            </div>
        </div>
    </div>
    </div>
@endsection









  