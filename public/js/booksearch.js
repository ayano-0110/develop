// 画像を表示するボックスの取得
const imageBox = document.getElementById("imageBox");

// APIで画像URLを取得
fetch('https://www.googleapis.com/books/v1/volumes?q=isbn')  // APIにリクエスト
  .then(response => response.json())
  .then(data => {
    // APIレスポンスから画像URLを取得
    const imageUrl = data.items[0].volumeInfo.imageLinks.thumbnail;  // APIレスポンスの画像URLを抽出

    


// <img> 要素を作成
const imgElement = document.createElement("img");
imgElement.src = imageUrl;  // 画像URLをセット
imgElement.alt = "Book Cover";  // 代替テキスト
imgElement.classList.add("img-fluid");  // Bootstrapのレスポンシブ対応


// 画像を `imageBox` に追加
imageBox.appendChild(imgElement);})