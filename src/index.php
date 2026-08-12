<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>はじめてのPHP</title>
    </head>
    <body>
    <h1>PHPの世界へようこそ</h1>
    <p>PHPを使って、動的なコンテンツを表示してみましょう</p>
    <p>１＋１は<?php echo 1+1; ?>です。</p>
    <p>現在の日時は、<?php echo date("Y年m月d日 H時i分s秒") ?>です。</p>
    <?php

    $name = "山田太郎";

    $age = 30;

    echo $name;

    echo $age;

    $age = 31;

    $fruits = ['りんご','ばなな','みかん'];

    echo $fruits[0];
    echo $fruits[0];
    echo $fruits[1];
    
    $fruits[] = 'ぶどう';

    echo $fruits[3];

    $products = [
        ['name' => 'ノートPC', 'price' => '80000'],
        ['name' => 'マウス', 'price' => 3000],
        ['name' => 'キーボード', 'price' => 5000],
    ];


    echo $products[2]['name'];

    $name = 'satou';
    $age = 25;

    $last_name = '山田';
    $first_name = '太郎';

    $full_name = $last_name . $first_name;

    echo $full_name;

    echo '私は、' . $full_name . 'です。';

    echo "私は、{$full_name}です。";
    ?>

    <?php
    $a = 10;
    $b = 3;

    echo $a + $b;
    echo $a - $b;
    echo $a * $b;
    echo $a / $b;
    echo $a % $b;
    echo $a ** $b;
    
    ?>

    <?php
    $price = 1500;
    $quantity = 3;
    $tax_rete = 0.10;

    $subtotal = $price * $quantity;
    echo "小計： " . $subtotal . "円";

    echo "<br>";
    
    $total = $subtotal * (1 + $tax_rete);
    echo "税込合計： " . $total . "円";

    echo "<br>";

    $number = 7;

    if ($number % 2 == 0) {
        echo "$number は偶数です。";
    } else {
        echo "$number は奇数です。";
    }

    $value = 15;

    if ($value % 3 == 0) {
        echo "$value は３の倍数です。";
    }
    echo "<br>";
    $age = 20;
    $name = "田中";
    
    echo $age == 20;
    echo $age > 18;
    echo $age < 18;

    echo $name == "田中";
    echo $name != "佐藤";

    echo "<br>";


    $number = 5;
    $string = "5";

    echo $number == $string;
    echo $number === $string;

    echo "<br>";


    $age = 25;
    $has_licence = true;

    if($age >= 18 && $has_licence) {
        echo "運転できます";
    }

    echo "<br>";

    $is_member = false;
    $has_coupon = true;

    if($is_member || $has_coupon) {
        echo "割引が適用されます";
    }

    echo "<br>";

    $is_logged_in = false;
    
    if(!$is_logged_in) {
        echo "ログインしてください";
    }

    echo "<br>";
    
    $count = 5;

    echo $count++;
    echo $count;

    echo "<br>";

    echo ++$count;
    echo $count--;
    echo $count;
    
    echo "<br>";

    $age = 25;
    $is_student = true;

    if($age >= 18 && $is_student || $age >= 65) {
        echo "割引対象です";
    }

    if(($age >= 18 && $is_student) || $age >= 65) {
        echo "割引対象です";
    }

    echo "<br>";


    




    ?>



    </body>
</html>