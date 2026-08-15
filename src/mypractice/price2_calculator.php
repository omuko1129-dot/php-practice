<!-- ループ -->
<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . "回目のこんにちは<br>";
}
// カウントダウン
for ($i = 10; $i >= 1; $i--) {
    echo $i . "...<br>";
}
$fruits = ["リンゴ","バナナ","みかん"];

foreach ($fruits as $fruit) {
    echo $fruit . "はおいしい<br>";
}
$scores = [
    "国語" => 80,
    "数学" => 95,
    "英語" => 72,
];
foreach ($scores as $subject => $score) {
    echo $subject . "の点数は" . $score . "点です。<br>";
}
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i . "<br>";
}
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . "<br>";
}
$fruits = ['りんご','ばなな'];
$fruits[] = 'みかん';
print_r($fruits);
echo "<br>";

$user = [
    'name' => '山田 太郎'
];
$user['age'] = 30;
$user['email'] = 'yamada@example.com';
print_r($user);

$fruits[1] = 'ブドウ';

print_r($fruits);

echo "<br>";

unset($fruits[1]);

print_r($fruits);

echo "<br>";

$fruits = array_values($fruits);

print_r($fruits);

echo "<br>";

var_dump($user);

echo "<br>";

echo count($fruits);

echo "<br>";

$fruits[] = 'ばなな';

if (in_array('ばなな',$fruits)) {
    echo "ばなながあります";
}

echo "<br>";

print_r($fruits);

echo "<br>";

array_push($fruits,'みかん','ぶどう');

print_r($fruits);

$fruits1 = ['りんご','バナナ'];
$fruits2 = ['みかん','ぶどう'];

$all_fruits = array_merge($fruits1,$fruits2);

echo "<br>";

print_r($all_fruits);

echo "<br>";

$user = ['name' => '山田','age' => 30];

if (array_key_exists('email',$user)) {
    echo 'メールアドレスがあります';
} else {
    echo 'メールアドレスがありません';
}

echo "<br>";

$users = [
    ['name' => '山田','age' => 30],
    ['name' => '佐藤','age' => 25],
    ['name' => '鈴木','age' => 35],
];

foreach ($users as $user) {
    echo '名前: ' . $user['name'] . '、年齢: ' . $user['age'] . '歳<br>';
}
?>
