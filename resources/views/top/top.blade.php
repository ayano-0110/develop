{{-- layouts/toppage.blade.phpを読み込む --}}
@extends('layouts.toppage')


{{-- toppage.blade.phpの@yield('title')に'Book Record'を埋め込む --}}
@section('title', 'Book Record')

{{-- toppage.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div>
<!-- フォームで送信される -->
  <form action="login.blade.php" method="POST">
  <button type="submit">ログイン</button>
  </form>
</div>

<div>
<h7>アカウントをお持ちでない方</h7>
  <!-- フォームで送信される -->
  <form action="register.blade.php" method="POST">
  <button type="submit">新規登録</button>
  </form>
</div>