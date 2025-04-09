{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本を登録する'を埋め込む --}}
@section('title', '本を登録する')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h5>内容を編集</h5>
                <form action="{{ route('bookedit.update', ['id' => $book_form->id]) }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $book_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="author">著者</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="author" rows="1">{{ $book_form->author }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="asummary">あらすじ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="summary" rows="10">{{ $book_form->summary }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="impression">感想</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="impression" rows="10">{{ $book_form->impression }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="memo">メモ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="memo" rows="10">{{ $book_form->memo }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-3">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $book_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3 mb-5">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $book_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
