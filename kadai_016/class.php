<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }

    public function show_price() {
      echo 'Price: ' . $this->price . ' Yen<br>';
    }

    public function show_detail() {
      return 'Name: ' . $this->name . ', Price: ' . $this->price . ' Yen';
    }
  }

$food = new Food('tomato' ,200);
echo $food->show_detail() . '<br>';
$food->show_price();

class Animal {
    public $name;
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height() {
      echo 'Height: ' . $this->height . ' cm<br>';
  }
}

$animal = new Animal('dog', 80, 8000);
echo $animal->show_detail() . '<br>';
$animal->show_height();
  
  ?>

</body>
</html>