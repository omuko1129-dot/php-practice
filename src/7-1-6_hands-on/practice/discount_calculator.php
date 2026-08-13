<?php
//課題１
//変数の定義
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_rate - $discount_amount;
//表示
echo "価格: " . $original_price . "<br>";
echo "割引率: " . ($discount_rate * 100) . "%<br>";
echo "最終金額: " . $fainal_price . "円<br>";

//課題２
//変数の定義
$number = 7;
//奇数偶数の判定、表示
if ($number % 2 == 0) {
    echo "{$number}は、偶数です。";
} else {
    echo "{$number}は、奇数です。";
}

//課題３
//変数の入力
$age = 25;
$is_member = true;
$is_student = false;
//判定の表示
//18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます";
}
//65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます";
}
//課題４
//変数
$score = 100;
//結果の表示
echo "初期スコア: {$score}点<br>";
$score += 50;
echo "ボーナス後: {$score}点<br>";
$score -= 30;
echo "ダメージ後: {$score}点<br>";
$score *= 2;
echo "最終スコア: {$score}点<br>";
?>