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
    public function show_price() {
      $this->price = 200;
      echo $this->price . '<br>';
    }
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
}
$food = new Food('tomato' ,200);
print_r($food);
echo '<br>';

class Animal {
    public $name;
    public $height;
    public $weight;
    public function show_height() {
        $this->height = 80;
        echo $this->height . '<br>';
    }
    public function __construct(string $name, int $height, string $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}
$animal = new Animal('dog' ,80, 8000);
print_r($animal);
echo '<br>';
$food->show_price();
$animal->show_height();
  
  ?>

</body>
</html>