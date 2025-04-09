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
        <div class="p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 400px; width: 300px;">
        @if ($book->image_path)
        {{-- 画像がURL形式ならそのまま表示 --}}
        <img src="{{ $book->image_path }}" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">

        @endif
        </div>
      </div>

      <!-- 右側の入力フォーム -->
      <div class="col-md-6">
            <div class="mb-5">
              <h6>タイトル</h6>
              <p class="border p-2 rounded">{{$book->title}}</p>
            </div>
            <div class="mb-5">
              <h6>著者</h6>
              <p class="border p-2 rounded">{{$book->author}}</p>
            </div>
            <div class="mb-5">
              <h6>あらすじ</h6>
              <p class="border p-2 rounded">{{$book->summary}}</p>
            </div>
      </div>

      <div class="p-3">
            <div class="mb-5">
              <h6>感想</h6>
              <p class="border p-2 rounded">{{$book->impression}}</p>
            </div>
            <div class="mb-5">
              <h6>メモ</h6>
              <p class="border p-2 rounded">{{$book->memo}}</p>
            </div>
            <div class="mb-5">
              <a href="{{ route('bookedit.edit', ['id' => $book->id]) }}" class="btn btn-primary">編集</a>
           </div>

      </div>
    </div>
  </div>


</body>
</html>


@endsection