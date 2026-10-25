<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    trait message1 {
        public function msg1() {
            echo "PHP OOP is fun!<br>";
        }

        public function msg2() {
            echo "Traits reduce code duplication!<br>"; 
        }
        public function msg3() {
            echo "Hello World!<br>"; 
        }
    }
    // Define a Trait named 'message1'
    // Traits are used to reuse methods in multiple independent classes in PHP.

    trait message2 {
    public function msg4() {
        echo "Traits reduce code duplication!"; 
      }
    }
    // Define a second trait

    class Welcome {
        use message1;
        // Inject the trait into the class using the 'use' keyword
        // This makes all methods from 'message1' available inside the 'Welcome' class.
    }

    class Welcome1 {
        use message1;
    }

    class Welcome2 {
        use message1, message2;
    }
    // Class 'Welcome2' uses MULTIPLE traits separated by a comma

    $obj = new Welcome();
    $obj-> msg1();
    // Call the method provided by the trait
    // Instantiate Welcome and call a method from message1

    $obj1 = new Welcome1();
    $obj1->msg1();
    echo "<br>";
    // Instantiate Welcome1 and call a method from message1

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
    $obj2->msg3();
    $obj2->msg4();
    // Instantiate Welcome2 and call methods from BOTH message1 and message2
    ?>
</body>
</html>