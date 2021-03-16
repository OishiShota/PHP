<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <!-- lesson1_echo -->

  <?php
    // 'Hello, world!'をechoしてください
    echo "Hello,world";
  ?>
  
  <br>

  <?php
    // 7 * 2をechoしてください
    echo 7 * 2;
  ?>

  <br>

  <?php
    // 8 % 3をechoしてください
     echo 8 % 3;
  ?>

  <br>


  <!-- lesson2_データの種類 -->

  <!-- この下で5 + 7を出力しましょう -->
  <?php
    echo 5 + 7;
  ?>

  <br>

  <!-- この下で'5 + 7'を出力しましょう -->
  <?php
    echo "5 + 7"
  ?>

  <br>


  <!-- lesson3_変数 -->

  <!-- この下に変数$fruitを書いていきましょう！ -->
  <?php
    $fruit = "りんご";
    echo $fruit;
  ?>

  <br>

  <!-- この下に変数$sumを書いていきましょう！ -->
  <?php
    $sum = 8+9;
    echo $sum;
    
  ?>

  <br>

  <!-- lesson4_変数の更新 -->

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- この下で$xの計算をしていきましょう -->
  <?php
    $x += 10;
    echo $x;
  ?>

  <br>

  <!-- この下で$yの計算をしていきましょう -->
  <?php
    $y *= 5;
    echo $y;
  ?>

  <br>

  <!-- この下で$aの計算をしていきましょう -->
  <?php
    $a ++;
    echo $a;
  ?>

  <br>
  
  <!-- この下で$bの計算をしていきましょう -->
  <?php
    $b --;
    echo $b;
  ?>

  <br>


  <!-- lesson5_変数展開 -->

  <?php
    $name = 'にんじゃわんこ';
    // 'こんにちは！'という文字列と$nameを連結してechoしてください
    echo "こんにちは！".$name
  ?>

  <br>


  <!-- lesson6_if文 -->

  <?php

    $x = 99 * 99;
    $y = 77 * 77;

    // ここにif文を書いていきましょう
    if($x > 9800){
      echo "変数xは9800より大きいです。";
    }
    
    if($y > 6000){
      echo "変数yは6000より大きいです。";
    }
    
  ?>

</body>
</html>