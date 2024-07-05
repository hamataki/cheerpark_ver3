# cheerpark_ver3
①課題番号-プロダクト名
cheerpark_ver3

②課題内容（どんな作品か）
ログイン機能＋スポーツ選択、データ一覧表示（更新・削除）

③DEMO
デプロイしている場合はURLを記入（任意） https://cheerpark.sakura.ne.jp/cheerpark_ver3/index.php

④作ったアプリケーション用のIDまたはPasswordがある場合
ID: 〇〇〇〇〇〇〇〇
PW: 〇〇〇〇〇〇〇〇

⑤工夫した点・こだわった点

1.start.phpから3秒でselect.phpに画面遷移

2.更新機能追加（確認機能）

3.checkboxでも取得データの保持をできた
配列に設定しなおす必要があった。

4.アイコンを設定、絵文字の設定(https://fontawesome.com/icons)
 
5.削除機能追加

6.

以下、やりたかったこと
7.
8.
9.


⑦質問・疑問・感想、シェアしたいこと等なんでも
[感想]　checkboxでも取得データの保持することに苦労した。
$sports = isset($result['sport']) ? explode("、", $result['sport']) : [];によって配列にすることで可能になった。
[参照]　https://qiita.com/bi_boroku/items/cb880ddaa47669c3f29e
