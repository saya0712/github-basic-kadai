<?php
// 点数の配列
$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 合計計算
$sum = array_sum($scores);

// 点数の個数を取得
$count = count($scores);

// 平均点計算
$average = $sum / $count;

// 結果をブラウザに表示
echo "合計: " . $sum . "<br>";
echo "平均点: " . round($average, 2) . "<br>";
?>