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

//↓バリデーションでエラー発見した時にエラーを格納するために必要な記述
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

//ここまで
            </div>
        </div>
    </div>
@endsection