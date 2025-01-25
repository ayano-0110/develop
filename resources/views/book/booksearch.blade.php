{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'検索して登録'を埋め込む --}}
@section('title', '検索して登録')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
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
        <div class="p-3 border bg-white d-flex justify-content-center align-items-center" style="min-height: 500px;">
          <h4>画像が入る</h4>
        </div>
      </div>

      <!-- 右側の入力フォーム -->
      <div class="col-md-6">
        <div class="p-3 bg-white">
          <h4>入力フォーム</h4>
          <form>
            <div class="mb-3">
              <label for="title" class="form-label">タイトル</label>
              <input type="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">著者</label>
              <input type="author" class="form-control" id="author">
            </div>
            <div class="mb-3">
              <label for="summary" class="form-label">あらすじ</label>
              <textarea id="impression" name="impression" rows="7" cols="50" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
          </form>
        </div>
      </div>


      
        <div class="p-3 bg-white">
        <form>
            <div class="mb-3">
              <label for="impression" class="form-label">感想</label>
              <textarea id="impression" name="impression" rows="10" cols="50" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="memo" class="form-label">メモ</label>
              <textarea id="memo" name="memo" rows="10" cols="50" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
          </form>

    </div>
  </div>

  <!-- Bootstrap 5のJS CDN（オプション） -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection