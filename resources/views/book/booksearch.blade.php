{{-- layouts/book.blade.phpを読み込む --}}
@extends('layouts.book')


{{-- book.blade.phpの@yield('title')に'検索して登録'を埋め込む --}}
@section('title', '検索して登録')

{{-- book.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<div class="container">
    <h3>検索して登録</h3>
    
    <!-- ISBN入力と検索ボタン -->
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" class="form-control" placeholder="ISBNを入力" required>
        <button type="button" id="searchBtn" class="btn btn-primary mt-2">検索</button>
    </div>
    
    <!-- 検索結果表示 -->
    <div id="searchResults" class="mt-4"></div>
   
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
            <textarea id="summary" name="summary" rows="7" cols="50" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="memo">感想・メモ</label>
            <textarea id="memo" name="memo" rows="10" cols="50" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-5">登録</button>

    </form>
</div>

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
            const resultItem = document.createElement('div');
            resultItem.classList.add('search-result-item');
            resultItem.innerHTML = `
                <h5>${book.title}</h5>
                <p>著者: ${book.authors ? book.authors.join(", ") : '不明'}</p>
                <p>${book.description ? book.description.slice(0, 100) + '...' : '説明はありません'}</p>
                <button class="btn btn-primary select-book" data-title="${book.title}" data-author="${book.authors ? book.authors.join(", ") : ''}" data-description="${book.description || ''}">選択</button>
            `;
            resultsDiv.appendChild(resultItem);
        });

        // 書籍を選択した場合にフォームに入力する
        document.querySelectorAll('.select-book').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('title').value = this.getAttribute('data-title');
                document.getElementById('author').value = this.getAttribute('data-author');
                document.getElementById('description').value = this.getAttribute('data-description');
            });
        });
    }
</script>
@endsection