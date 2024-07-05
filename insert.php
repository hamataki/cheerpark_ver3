<?php
require_once('funcs.php');

//1. POSTデータ取得
$birth = $_POST['birth'];
$name  = $_POST['name'];
$email = $_POST['email'];
$passward = $_POST["passward"];
$other = $_POST['other'];
// 好きなスポーツの取得
if (isset($_POST['sport']) && is_array($_POST['sport'])) {
    $sport = implode("、", $_POST["sport"]);
};

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
cheerpark_an_table3( id, birth, name, email, passward, sport, other, date )
VALUES( NULL, :birth, :name, :email, :passward, :sport, :other, now() ) ');

//  2. バインド変数を用意
$stmt->bindValue(':birth', $birth, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':passward', $passward, PDO::PARAM_STR);
$stmt->bindValue(':sport', $sport, PDO::PARAM_STR);
$stmt->bindValue(':other', $other, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute(); //true or false

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    //select.phpへリダイレクト
    redirect('start.php');
};
