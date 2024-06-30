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
    <script
      src="https://kit.fontawesome.com/77e6d61b62.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <?php include("head.html");?>
    <div class="cont">
    <form action="insert.php" method="post"><br>
      <div class="question" id="question1">
        <h2 class="birth_title">生年月日を入力してください</h2>
        <input type="date" name="birth" class="birth_input" required><br>
        <h2 class="name">お名前</h2>
        <input type="text" name="name" class="name_input" required><br>
        <h2 class="email">Email</h2>
        <input type="text" name="email" class="email_input" required><br>
        <h2 class="passward">パスワード</h2>
        <input type="text" name="passward" class="passward_input" required><br>
        <button type="button" class="next">
            <i class="fa-solid fa-forward-step" style="color: rgb(87, 80, 80)"></i>
        </button>
        </div>

        <div class="question" id="question2">
        <h2 class="sports">好きなスポーツを選んでください</h2>
        <div class="sports_group">
            <div class="container">
                <input class="check" id="toggle1" type="checkbox" name="sport[]" value="サッカー">
                <label class="toggle" for="toggle1">サッカー</label>
                <input class="check" id="toggle2" type="checkbox" name="sport[]" value="野球">
                <label class="toggle" for="toggle2">野球</label>
                <input class="check" id="toggle3" type="checkbox" name="sport[]" value="バスケットボール">
                <label class="toggle" for="toggle3">バスケットボール</label><br>
                <input class="check" id="toggle4" type="checkbox" name="sport[]" value="ゴルフ">
                <label class="toggle" for="toggle4">ゴルフ</label>
                <input class="check" id="toggle5" type="checkbox" name="sport[]" value="競馬">
                <label class="toggle" for="toggle5">競馬</label>
                <input class="check" id="toggle6" type="checkbox" name="sport[]" value="eスポーツ">
                <label class="toggle" for="toggle6">eスポーツ</label>
            </div>
        </div>
        <div class="other_group">
            <div class="other">
            その他：<input class="other_txst" type="txst" name="other">
            </div>
        </div>
        <div class="btn_group">
        <div class="btn_back">
        <button type="button" class="back">
            <i class="fa-solid fa-backward-step" style="color: rgb(87, 80, 80)"></i>
        </button>
        </div>
        <div class="btn_send">
        <button type="submit" class="send">
            <i class="fa-solid fa-paper-plane" style="color: rgb(87, 80, 80)"></i>
        </button>
        </div>
        </div>
        </div>
    </form>
  </div>
    <footer>Copyright © 2024 CheerParK</footer>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>