<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <style>
           footer {
              background-color: #333; /* 背景色 */
              color: white;            /* 文字色 */
              text-align: center;      /* 中央揃え */
              padding: 10px;           /* 内部余白 */
              position: fixed;         /* 固定 */
              bottom: 0;               /* 下端に配置 */
              width: 100%;             /* 幅を100%に設定 */
              font-size: 10px; /* ピクセル単位で指定 */
            }
        </style>
    </head>
    <body>
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-info bg-gradient shadow-sm">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="/develop/logo.images/logo1.png" alt="Logo">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- ナビを開閉 -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <!-- ナビバーを左寄せ -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                             <a class="nav-link" href="/bookshelf">My本棚</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="/bookshelf">検索</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="/bookshelf">古本を探す</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="/bookshelf">チャット</a>
                        </li>
                    </ul>
                    <!-- ナビバーを右寄せ -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <footer>
      <p>© 2025 Book Record.</p>
    </footer>
    </body>
</html>