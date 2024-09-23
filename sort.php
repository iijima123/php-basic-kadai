<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
      function sortArray($array,$order= SORT_ASC){
        if($order === SORT_ASC){
          sort($array,SORT_ASC);
        }elseif($order === SORT_DESC){
          rsort($array);
        }else{
          echo "無効なソート順です。";
          return;
        }

      foreach($array as $num){
        echo $num . "<br>";
      }
    }
      $nums = [15,4,18,23,10];

      echo "昇順にソートします。<br>";
      sortArray($nums,SORT_ASC);
      echo '<br>';

      echo "降順にソートします。<br>";
      sortArray($nums,SORT_DESC);
    ?>
  </p>
</body>
</html>