<?php

$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_an_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = '';
if ($status === false) {
    sql_error($stmt);
} else {
    // $result = $stmt->fetch();
    redirect('select02.php');
}

?>