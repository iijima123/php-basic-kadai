<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_016</title>
</head>

<body>
  <p>
    <?php
    // Foodクラス
    class Food {
      public $name;
      public $price;

      public function show_price(){
        echo '値段:' . $this->price . '円<br>';
      }

      public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
      }
    }

      // Animalクラス  
    class Animal {
      public $name;
      public $height;
      public $weight;

      public function show_height(){
      echo '身長:' . $this->height . 'cm<br>';
      }

      public function __construct($name, $height, $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      }
    }   

    $potato = new Food('potato',250);

    $dog = new Animal('dog',60,5000);

    echo '<pre>';
    print_r($potato);
    print_r($dog);
    echo '</pre>';

    echo $potato->name;
    $potato->show_price();
    echo '<br>';
    echo $dog->name;
    $dog->show_height();
    ?>
  </p>
</body>
</html>