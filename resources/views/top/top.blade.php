<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Top画面</title>
        <style>
            header {
              background-color: #4CAF50; /* 背景色（緑） */
              color: white;              /* 文字色 */
              padding: 10px;             /* 内部余白 */
              text-align: left;        /* 左揃え */
              font-size: 10px; /* ピクセル単位で指定 */
            
            }
           footer {
              background-color: #333; /* 背景色 */
              color: white;            /* 文字色 */
              text-align: center;      /* 中央揃え */
              padding: 20px;           /* 内部余白 */
              position: fixed;         /* 固定 */
              bottom: 0;               /* 下端に配置 */
              width: 100%;             /* 幅を100%に設定 */
              font-size: 10px; /* ピクセル単位で指定 */
            }
        </style>
    </head>
    <body>
      <header>
        <h1>Book Record</h1>
        <nav>
          <a href="#">ホーム</a>
          <a href="#">サービス</a>
          <a href="#">お問い合わせ</a>
          <a href="#">ブログ</a>
        </nav>
      </header>

      <div>
        <h2>ページのコンテンツ</h2>
        <!-- フォームで送信される -->
  　　　　　<form action="login.blade.php" method="POST">
  　　　　　　<button type="submit">ログイン</button>
  　　　　　</form>

        <p>これはページのコンテンツ部分です。</p>
      </div>


      <div>
        <h2>ページのコンテンツ</h2>
        <!-- フォームで送信される -->
  　　　　　<form action="register.blade.php" method="POST">
  　　　　　　<button type="submit">新規登録</button>
  　　　　　</form>

        <p>これはページのコンテンツ部分です。</p>
      </div>


      <footer>
        <p>© 2025 Book Record. All Rights Reserved.</p>
      </footer>
    </body>
</html>
