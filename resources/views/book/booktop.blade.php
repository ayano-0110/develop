{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'My本棚'を埋め込む --}}
@section('title', 'My本棚')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>My本棚</h2>
            </div>
        </div>
    </div>
@endsection