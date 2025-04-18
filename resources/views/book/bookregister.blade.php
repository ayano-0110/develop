{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'本を登録する'を埋め込む --}}
@section('title', '本を登録する')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
    <h3>ISBNで検索</h3>
    
    <!-- ISBN入力と検索ボタン -->
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" class="form-control" placeholder="ISBNを入力" required>
        <button type="button" id="searchBtn" class="btn btn-primary mt-2">検索</button>
    </div>
    

    @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    @endif

    <!-- 検索結果表示 -->
    <div id="searchResults" class="mt-4"></div>
    <form action="{{ route('book.bookregister') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author">著者</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="summary">あらすじ</label>
            <textarea id="summary" name="summary" rows="7" cols="50" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="impression">感想</label>
            <textarea id="impression" name="impression" rows="10" cols="50" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea id="memo" name="memo" rows="10" cols="50" class="form-control"></textarea>
        </div>
        <!-- 本の表紙画像をフォームで送るためのhidden input -->   
        <input type="hidden" id="thumbnail_url" name="thumbnail_url">
        <!-- 選択された本の表紙を表示する -->
        <div class="form-group mt-3">
            <label>表紙</label><br>
            <img id="thumbnail" src="./images/no.image.png" alt="Book Cover" class="img-thumbnail">
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-5">登録</button>

    </form>
</div>
</body>
</html>

<script>
    // ISBN検索ボタンを押すと書籍情報をGoogle Books APIで取得
    document.getElementById('searchBtn').addEventListener('click', function() {
        const isbn = document.getElementById('isbn').value.trim();
        if (isbn.length === 13) { // ISBNは13桁であることを確認
            fetch(`https://www.googleapis.com/books/v1/volumes?q=isbn:${isbn}`)
                .then(response => response.json())
                .then(data => {

                    if (data.items) {
                        displaySearchResults(data.items);
                    } else {
                        alert("書籍情報が見つかりませんでした。");
                    }
                })
                .catch(error => {
                    console.error("エラー:", error);
                    alert("エラーが発生しました。");
                });
        } else {
            alert("正しいISBNを入力してください。");
        }
    });

    // 検索結果を表示する関数
    function displaySearchResults(items) {
        const resultsDiv = document.getElementById('searchResults');
        resultsDiv.innerHTML = ''; // 以前の検索結果をクリア

        items.forEach(item => {
            const book = item.volumeInfo;
            const thumbnail = book.imageLinks ? book.imageLinks.thumbnail : './images/no.image.png'; // 画像がない場合の代替画像
        

            const resultItem = document.createElement('div');
            resultItem.classList.add('search-result-item');
            resultItem.innerHTML = `
                <h5>${book.title}</h5>
                <p>著者: ${book.authors ? book.authors.join(", ") : '不明'}</p>
                <p>${book.description ? book.description.slice(0, 100) + '...' : '説明はありません'}</p>
                <button class="btn btn-primary select-book" data-title="${book.title}" data-author="${book.authors ? book.authors.join(", ") : ''}" data-description="${book.description || ''}" data-thumbnail="${thumbnail}">選択</button>
            `;
            resultsDiv.appendChild(resultItem);
        });

        // 書籍を選択した場合にフォームに入力する
        document.querySelectorAll('.select-book').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('title').value = this.getAttribute('data-title');
                document.getElementById('author').value = this.getAttribute('data-author');
                document.getElementById('summary').value = this.getAttribute('data-description');
                document.getElementById('thumbnail').src = this.getAttribute('data-thumbnail');
                document.getElementById('thumbnail_url').value = this.getAttribute('data-thumbnail'); // フォーム送信用

                

            });
        });
    }
</script>


@endsection