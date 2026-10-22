<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Access Modifiers</title>
</head>

<body>

    <?php
     class Fruit {
        public $name = "Mango";
        // PUBLIC: Can be accessed from anywhere.
        protected $color = "Yellow";
        // PROTECTED: Can be accessed inside this class and child classes.

        private $price = 100;
        // PRIVATE: Can only be accessed directly inside this class.

       public function showPrice() {
            echo "Price: " . $this->price . "<br>";
        }
        // Public method to display the private price.
        // $this refers to the current object.
        // This method can access $price because it belongs to Fruit.
}

      // Create a child class named Mango.
      // The extends keyword allows Mango to inherit from Fruit. 
      class Mango extends Fruit {

          public function showColor() {
            echo "Color: " . $this->color . "<br>";
       }
       // Public method to display the protected color.
}



$mango = new Mango();


echo "Name: " . $mango->name . "<br>";


$mango->showColor();


$mango->showPrice();




?>

</body>

</html>