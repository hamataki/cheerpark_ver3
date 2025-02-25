<?php
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
};

//DB接続関数：db_conn() 
function db_conn()
{

    try {
        $db_name = 'cheerpark_db_class'; //データベース名
        $db_host = 'localhost'; //DBホスト
        $db_id   = 'root'; //アカウント名
        $db_pw   = ''; //パスワード：MAMPは'root'
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
};


//SQLエラー関数：sql_error($stmt)
//SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQLErrorMessage:' . print_r($error, true));
};


//リダイレクト関数: redirect($file_name)
function redirect($file_name)
{
    header('Location:' . $file_name);
    exit();
};
