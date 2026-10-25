<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class greeting {
        public static function welcome() {
            echo "Hello World!<br>";
        }
        // A static method can be called without creating an instance of the class

        public function __construct() {
            self::welcome();
        }
        // The constructor runs automatically when an object is created
     } 

     class calc {
        public static function sum($x, $y) {
            return $x * $y;
        }
        // Note: Even though named 'sum', this multiplies $x and $y ($x * $y)
     }

     
     new  greeting();
     // Instantiating 'greeting' triggers the constructor, which calls self::welcome()
    // new greeting(); // Output: Hello World!

     $res = calc::sum(6, 4);
     echo $res . "<br>";
     // Calling a static method directly using the scope resolution operator (::)

     greeting::welcome();
     // Calling a static method directly on the class without instantiation
     
     // Calling a static method directly on the class without instantiation
     class A {
        public static function welcome() {
            echo "HIT<br>";
        }
     }

     class B {
        public function message(){
            A::welcome();
            // Class B calls a static method from Class A using A::
        }
     }

     $obj = new B();
     $obj-> message();

     
     // Protected Static Methods & Inheritance
     class domain {
        protected static function getWebsiteName() {
           return "W3Schools.com";
        }
        // Protected static method can be accessed within the class or child classes
     }

     class domainW3 extends domain {
          public $websiteName;
            public function __construct() {
                $this -> websiteName = parent::getWebsiteName();
            }
         // 'parent::' accesses the static method from the parent class ('domain')  
         // Instantiate child class and display the property assigned via parent's static method	
     }

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

    ?>
</body>
</html>