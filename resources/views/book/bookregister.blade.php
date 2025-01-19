{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本を登録する'を埋め込む --}}
@section('title', '本を登録する')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<?php
// データベース接続
$servername = "localhost";//?
$username = "";
$password = "";
$dbname = "BookShelf";  // データベース名

// 接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続チェック
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// データベースからデータを取得
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 各行を表示
    while($row = $result->fetch_assoc()) {
        echo "名前: " . $row["name"]. " - メール: " . $row["email"]. "<br>";
    }
} else {
    echo "0件の結果";
}

// 接続を閉じる
$conn->close();
?> 



        <form method="POST" action="{{ route('bookregister') }}">
            @csrf

            <div class="form-group">
                <label for="title">本のタイトル</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="author">著者</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="summary">あらすじ</label>
                <textarea id="summary" name="summary" rows="3" cols="50" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="description">感想・メモ</label>
                <textarea id="description" name="description" rows="3" cols="50" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
@endsection