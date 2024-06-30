// $("#question2").css("display", "none");

// // 次の質問を表示する
// $(".next").on("click", function () {
//   $("#question1").hide();
//   $("#question2").show();
// });
// // 前の質問を表示する
// $(".back").on("click", function () {
//   $("#question1").show();
//   $("#question2").hide();
// });

let nowQuestion = 0;

function showQuestion(index) {
  $(".question").hide(); // 全ての質問を非表示にする
  $(".question").eq(index).show(); // 指定されたインデックスの質問を表示する
}

function nextQuestion() {
  const questions = $(".question"); // クラス名 'question' を持つ要素をすべて選択
  if (nowQuestion < questions.length - 1) {
    nowQuestion ++; // 現在の質問のインデックスを1増やす
    showQuestion(nowQuestion); // 次の質問を表示する
  }
}

function prevQuestion() {
  if (nowQuestion > 0) {
    nowQuestion --; // 現在の質問のインデックスを1減らす
    showQuestion(nowQuestion); // 前の質問を表示する
  }
}

// 最初の質問を表示する
showQuestion(nowQuestion);

// 「次へ」ボタンがクリックされたら次の質問を表示する
$(".next").on("click", nextQuestion);

// 「戻る」ボタンがクリックされたら前の質問を表示する
$(".back").on("click", prevQuestion);
