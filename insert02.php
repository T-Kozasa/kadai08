<?php
require_once('funcs.php'); //無駄なエラーを出さないために、呼び出す系のコマンドは一番上に置いておく

//1. POSTデータ取得
$name   = $_POST['name'];
$amazon  = $_POST['amazon'];
$assesment    = $_POST['assesment'];
$comment = $_POST['comment'];

//2. DB接続します
//*** function化する！  *****************
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO 
                    gs_an_table
                        (name, amazon, assesment, comment, indate)
                    VALUES(:name , :amazon , :assesment , :comment, sysdate())');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name' , $name , PDO::PARAM_STR);
$stmt->bindValue(':amazon' , $amazon , PDO::PARAM_STR);
$stmt->bindValue(':assesment' , $assesment , PDO::PARAM_INT);
$stmt->bindValue(':comment' , $comment , PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    redirect('index02.php');
    // header('Location: index.php');
    // exit();
}

?>