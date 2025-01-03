{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'My本棚'を埋め込む --}}
@section('title', '本棚を表示')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')