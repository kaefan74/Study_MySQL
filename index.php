
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../php/css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
  // PDO = PHP Data Object
  // phpでデータを扱うためのオブジェクト
  // new PDO('[データベースに接続する為の文字列 ]
  // (mysql:データベースの名前;サーバーのアドレス;文字コード)
  //   mysql:dbname=mydb;host=127.0.0.1 charaset=utf8',
  //   'root',[ユーザー名]
  //   'root'[パスワード]);

  try{
    $db = new PDO('mysql:dbname=mydb;host=127.0.0.1 charaset=utf8',
    'root','root');
  }catch(PDOException $e){
    echo 'DB接続エラー: '.$e->getMessage();
  }
?>
<!-- http://localhost:8888/memo/index.php -->
</pre>
</main>
</body>    
</html>