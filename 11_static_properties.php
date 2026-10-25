<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class pi {
        public static $value = 3.14159;
        // Declare a static property belonging to the class itself, not specific instances
        
        public function staticValue() {
            return self::$value . "<br>";
        }
        // A regular method accessing the static property using 'self::'
    }

    class x extends pi {
        public function xStatic() {
            return parent::$value . "<br>";
        }
        // A regular method accessing the parent class's static property using 'parent::'
    }

    echo x::$value . "<br>";

    $x = new x();
    echo $x->xStatic() . "<br>";

    $pi = new pi();
    echo $pi->staticValue();

    echo pi::$value . "<br>";
    ?>
</body>
</html>