<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        // Create a Fruit class with two public properties: $name and $color.
        // The __construct() method automatically runs when a new object is created.
        // It initializes the object's properties using $this.
        // The get_details() method displays the fruit's name and color.
        // Unlike a regular setter method, the constructor assigns values during object creation


        function get_details() {
            echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
        }
    }
   

    $apple = new Fruit("Apple", "Red");
    $apple->get_details();

    $banana = new Fruit("Banana", "Yellow");
    $banana->get_details();

    ?>
</body>
</html>