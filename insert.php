<?php
require_once('funcs.php');

//1. POSTデータ取得
$birth = $_POST['birth'];
$name  = $_POST['name'];
$email = $_POST['email'];
$passward = $_POST["passward"];
$other = $_POST['other'];

// 好きなスポーツの取得
// JSONデータを配列にデコード
// 配列データをカンマ区切りの文字列に変換
if (isset($_POST['sport']) && is_array($_POST['sport'])) {
    $sport = implode("、", $_POST["sport"]);
};

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO
( id, birth, name, email, passward, sport, other, date )
VALUES( NULL, :birth, :name, :email, :passward, :sport, :other, now() ) ');

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':birth', $birth, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':passward', $passward, PDO::PARAM_STR);
$stmt->bindValue(':sport', $sport, PDO::PARAM_STR);
$stmt->bindValue(':other', $other, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute(); //true or false

//４．データ登録処理後
if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
} else {
//５．write.phpへリダイレクト
    header('Location: select.php');

};

$c = ",";
$birth = $_POST["birth"];
$name = $_POST["name"];
$email = $_POST["email"];
$passward = $_POST["passward"];

// 好きなスポーツの取得
if (isset($_POST['sport']) && is_array($_POST['sport'])) {
    $sport = implode("、", $_POST["sport"]);
};
$other = $_POST["other"];

$str = $birth.$c.$name.$c.$email.$c.$passward.$c.$sport.$c.$other;
// データをCSVファイルに書き込み
$file = fopen("data.txt","a");
fwrite($file,$str."\n");
// ファイルを閉じる
fclose($file);
header("Location: start.php");
exit;

?>