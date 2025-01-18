{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')

{{-- book.blade.phpの@yield('title')に'ジャンル'を埋め込む --}}
@section('title', 'ジャンル')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')











@if (count($errors) > 0)
    <ul>
    @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
    @endforeach
        </ul>
    @endif
@endsection