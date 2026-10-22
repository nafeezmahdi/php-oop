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

        function __destruct() {
            echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
        }
        // Create a Fruit class with two public properties ($name and $color).
        // The __construct() method automatically runs when an object is created
        // and assigns values to its properties using $this.
        // The __destruct() method automatically runs when an object is destroyed
        // or during script shutdown and displays the fruit's name and color.
    }

   $apple = new Fruit('Apple', 'Red');
   $banana = new Fruit('Banana', 'Yellow');
    ?>
</body>
</html>