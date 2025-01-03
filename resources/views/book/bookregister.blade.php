{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'My本棚'を埋め込む --}}
@section('title', '本を登録する')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <h1>本を登録する</h1>

        <form method="POST" action="{{ route('bookregister.create') }}">
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
                <label for="description">説明</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">登録</button>
        </form>
    </div>
@endsection