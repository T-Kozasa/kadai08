<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
require_once('funcs.php'); //無駄なエラーを出さないために、呼び出す系のコマンドは一番上に置いておく

//1. POSTデータ取得
$name   = $_POST['name'];
$amazon  = $_POST['amazon'];
$assesment    = $_POST['assesment'];
$comment = $_POST['comment'];
$id = $_POST['id'];

//2. DB接続します
//*** function化する！  *****************
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE
                        gs_an_table
                    SET
                        name = :name,
                        amazon = :amazon,
                        assesment = :assesment,
                        comment = :comment,
                        indate = sysdate()
                    WHERE
                        id = :id;
                        ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':amazon', $amazon, PDO::PARAM_STR);
$stmt->bindValue(':assesment', $assesment, PDO::PARAM_INT);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
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