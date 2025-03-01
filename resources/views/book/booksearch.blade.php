@extends('layouts.book')

@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブートストラップレイアウト</title>
  <!-- Bootstrap 5のCDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <!-- 左側のボックス -->
      <div class="col-md-6">
        <!-- <div class="p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 500px;"> -->
        <div id="imageBox" class="p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 400px; width: 300px;">
        <script src="{{ asset('js/booksearch.js') }}"></script>
        </div>
      </div>

      <!-- 右側の入力フォーム -->
      <div class="col-md-6">
            <div class="mb-5">
              <h5>タイトル</h5>
              <p>{{$book_form->title}}</p>
            </div>
            <div class="mb-5">
              <h5>著者</h5>
              <p>{{$book_form->author}}</p>
            </div>
            <div class="mb-5">
              <h5>あらすじ</h5>
              <p>{{$book_form->summary}}</p>
            </div>
      </div>

      <div class="p-3">
            <div class="mb-5">
              <h5>感想</h5>
              <p>{{$book_form->impression}}</p>
            </div>
            <div class="mb-5">
              <h5>メモ</h5>
              <p>{{$book_form->memo}}</p>
            </div>
            <div class="mb-5">
  
            <!-- <div class="mb-5">
              <a href="{{ route('bookedit.edit') }}" class="btn btn-primary">編集</a>
            </div> -->
            <div>
              <a href="{{ route('bookedit.edit', ['id' => $book_form->id]) }}" class="btn btn-primary">編集</a>
           </div>

      </div>
    </div>
  </div>


</body>
</html>


@endsection