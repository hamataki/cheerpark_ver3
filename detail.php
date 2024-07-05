<?php
$id = $_GET['id'];
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM cheerpark_an_table3 WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
} else {
    $result = $stmt->fetch();
    // $result['sport'] がカンマ区切りの文字列の場合、それを配列に変換
    $sports = isset($result['sport']) ? explode("、", $result['sport']) : [];
}

?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ログイン画面</title>

    <!-- Favicon -->
    <link rel="icon" href="img/hat.jpg" />

    <!-- 絵文字 -->
    <script src="https://kit.fontawesome.com/77e6d61b62.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("head.html"); ?>
    <div class="cont">
        <form action="update.php" method="post"><br>
            <div class="" id="question1">
                <h2 class="birth_title">生年月日を入力してください</h2>
                <input type="date" name="birth" class="birth_input" value="<?= $result['birth'] ?>"><br>
                <h2 class="name">お名前</h2>
                <input type="text" name="name" class="name_input" value="<?= $result['name'] ?>"><br>
                <h2 class="email">Email</h2>
                <input type="text" name="email" class="email_input" value="<?= $result['email'] ?>"><br>
                <h2 class="passward">パスワード</h2>
                <input type="text" name="passward" class="passward_input" value="<?= $result['passward'] ?>" value="<?= $result['passward'] ?>"><br>
            </div>

            <div class="" id="question2">
                <h2 class="sports">好きなスポーツを選んでください</h2>
                <div class="sports_group">
                    <div class="container">
                        <input class="check" id="toggle1" type="checkbox" name="sport[]" value="サッカー" <?php if (isset($sports) && in_array('サッカー', $sports)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                        <label class="toggle" for="toggle1">サッカー</label>
                        <input class="check" id="toggle2" type="checkbox" name="sport[]" value='野球' <?php if (isset($sports) && in_array('野球', $sports)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                        <label class="toggle" for="toggle2">野球</label>
                        <input class="check" id="toggle3" type="checkbox" name="sport[]" value='バスケットボール' <?php if (isset($sports) && in_array('バスケットボール', $sports)) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                        <label class="toggle" for="toggle3">バスケットボール</label><br>
                        <input class="check" id="toggle4" type="checkbox" name="sport[]" value='ゴルフ' <?php if (isset($sports) && in_array('ゴルフ', $sports)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                        <label class="toggle" for="toggle4">ゴルフ</label>
                        <input class="check" id="toggle5" type="checkbox" name="sport[]" value='競馬' <?php if (isset($sports) && in_array('競馬', $sports)) {
                                                                                                        echo "checked";
                                                                                                    } ?>>
                        <label class="toggle" for="toggle5">競馬</label>
                        <input class="check" id="toggle6" type="checkbox" name="sport[]" value='eスポーツ' <?php if (isset($sports) && in_array('eスポーツ', $sports)) {
                                                                                                            echo "checked";
                                                                                                        } ?>>
                        <label class="toggle" for="toggle6">eスポーツ</label>
                    </div>
                </div>
                <div class="other_group">
                    <div class="other">
                        その他：<input class="other_txst" type="txst" name="other" value="<?= $result['other'] ?>">
                    </div>
                </div>
                <div class="btn_send">
                    <button type="submit" class="send">
                        <i class="fa-solid fa-paper-plane" style="color: rgb(87, 80, 80)"></i>
                    </button>
                </div>
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
            </div>
        </form>
    </div>
    <footer>
        Copyright © 2024 CheerParK
        <a href=""><i class="fa-brands fa-x-twitter"></i></a>
        <a href=""><img src="img/hat.jpg" class="aicon" alt=""></a>
    </footer>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>