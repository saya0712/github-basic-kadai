<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎11章課題</title>
</head>

<body>
  <p>
    <?php
    // 連想配列を作成
    $product_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    // foreach文を使い$product_dataのキーと値を出力
    foreach ($product_data as $key => $value) {
      echo "{$key} : {$value}<br>";
    }
    ?>
  </p>
</body>

</html>

