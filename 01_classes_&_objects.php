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

        function set_details($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function get_details() {
            echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
        }
    }
     // Create a Fruit class with two public properties ($name and $color).
    // The set_details() method assigns values to the properties using $this.
    // The get_details() method displays the fruit's name and color.
    // The new keyword creates objects, and instanceof checks whether
    // a variable contains an object of a specified class.


    $apple = new Fruit();
    $apple->set_details("Apple", "Red");
    $apple->get_details();
    // Create an Apple object and set its details.

    $banana = new Fruit();
    $banana->set_details("Banana", "Yellow");
    $banana->get_details();
    // Create a Banana object and set its details.

    var_dump($apple instanceof Fruit);
    // Check whether the objects belong to the Fruit class.
    var_dump($date instanceof Fruit);
    // Check a variable that is not a Fruit object.

    ?>
</body>
</html>