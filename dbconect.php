<?php
     // PDO = PHP Data Object
  // phpでデータを扱うためのオブジェクト
  // new PDO('[データベースに接続する為の文字列 ]
  // (mysql:データベースの名前;サーバーのアドレス;文字コード)
  //   mysql:dbname=mydb;host=127.0.0.1 charset=utf8',
  //   'root',[ユーザー名]
  //   'root'[パスワード]);
 try{
  $db = new PDO('mysql:dbname=mydb;host=localhost;port=8889;charset=utf8','root','root');
    }catch(PDOException $e){
      echo 'DB接続エラー: '.$e->getMessage();
    }
?>