<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>
<body>
  <?php 

  // クラスFoodを定義
  class Food {
    // プロパティを定義                     
    private $name;
    private $price;

    // コンストラクタを定義
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッドを定義
    public function show_price() {
      echo $this->price . '<br>';
    }
  }

  // クラスAnimalを定義
  class Animal {
    // プロパティを定義                     
    private $name;
    private $height;
    private $weight;

    // コンストラクタを定義
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッドを定義
    public function show_height() {
      echo $this->height . '<br>';
    }
  }

  // インスタンス化
    $Food = new Food('potato', 250);
    $Animal = new Animal('dog', 60, 5000);


  // インスタンスの各プロパティの値を出力
    print_r($Food);
    echo "<br>";
    print_r($Animal);
    echo "<br>";
    
  // メソッドにアクセスして出力
    $Food->show_price();
    $Animal->show_height();

   ?>
</body>
</html>