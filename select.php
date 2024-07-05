<?php
require_once('funcs.php');

//1. DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM cheerpark_an_table3");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:" . $error[2]);
} else {
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<ul>';
    $view .= '<li>';
    $view .= '<a href="detail.php?id=' . $result['id'] . '">';
    $view .= $result['id'] . ' : '  . $result['date'] . ' : ' . $result['name'];
    $view .= '</a>';

    $view .= '<a href="delete.php?id=' . $result['id'] . '">';
    $view .= '<i class="fa-solid fa-trash"></i>';
    $view .= '</a>';
    $view .= '</li>';
    $view .= '</ul>';
    $view .= '<br>';
  };
};
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>好きなスポーツ調査表示</title>

  <!-- Favicon -->
  <link rel="icon" href="img/hat.jpg" />

  <!-- 絵文字 -->
  <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <!-- Head[Start] -->
  <header>
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録に戻る</a>
    </div>
  </header>
  <!-- Head[End] -->

  <!-- Main[Start] -->
  <div class="cont">
    <div>
      <div class="containerjum"><?= $view ?></div>
    </div>
  </div>
  <!-- Main[End] -->
  <footer>
    Copyright © 2024 CheerParK
    <a href=""><i class="fa-brands fa-x-twitter"></i>
      <a href=""><img src="img/hat.jpg" class="aicon" alt=""></a>
  </footer>
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>