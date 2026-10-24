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

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "The fruit is $this->name and the color is $this->color.<br>";
        }

        protected function intro_two(){
             echo "The fruit is $this->name and the color is $this->color.<br>";
        }
            // PROTECTED METHOD
            // A protected method can only be accessed:
            // 1. Inside its own class
            // 2. Inside a child class that inherits from it
            // It CANNOT be called directly from outside the class.

    }

    class Strawberry extends Fruit {
        // 'extends' means Strawberry inherits from Fruit.
        //
        // Strawberry can use the public and protected methods
        // and properties of the Fruit class.
        //
        // Fruit = Parent class
        // Strawberry = Child class
         public $weight;
  
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight; 
        }

        public function message() {
            echo "Am I a fruit or a berry. ";
            $this->intro_two();
            // This works because Strawberry extends Fruit.
            // Child classes can access protected parent methods
        }

        public function intro() {
            echo "A $this->name is $this->color, and the weight is $this->weight gram.<br>"; 
        }
         // METHOD OVERRIDING
        //
        // The parent class Fruit already has an intro() method.
        //
        // Here, Strawberry creates its own version of intro().
        //
        // This is called METHOD OVERRIDING.
        //
        // When intro() is called on a Strawberry object,
        // PHP uses this child method instead of the parent method.
    }
    
    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();
    // $strawberry->intro_two();
    // The following code would cause an ERROR
    // because intro_two() is protected.
    //
    // Protected methods cannot be called directly
    // from outside the class.
    // But we can call the public message() method.
    //
    // Inside message(), the protected intro_two()
    // method is called.
    //
    // This works because Strawberry is a child of Fruit.
    $strawberry->message();
    $fruit = new Fruit("Date", "dark brown");
    $fruit->intro();

    class Fruits {
    final public function intro() {
        echo "HEYYYYY";
    }
    // The 'final' keyword prevents method overriding.
    //
    // If a method is declared final,
    // a child class CANNOT replace that method.
}

    class Strawberrys extends Fruits {
    // public function intro() {
    //     echo "NOYYYYY";
    // }
    // If you uncomment this method,
    // PHP will throw a fatal error.
    //
    // Because intro() is final in the parent class,
    // the child class cannot override it.
    }

    ?>
</body>
</html>