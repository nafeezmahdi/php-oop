<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Goodbye {
        const MESSAGE = "Thank you for visiting...<br>";
        // 'const' is used to declare a class constant.
        //
        // A constant is a value that cannot be changed
        // after it has been declared.
        //
        // MESSAGE is the constant name.
        // A class constant cannot be reassigned
        // Unlike normal properties, constants:
        // - Do not use the $ symbol.
        // - Cannot be changed after declaration.
        // - Can be accessed without creating an object.

        public function bye() {
            echo self::MESSAGE;
        }
        // 'self::' is used to access a constant
        // defined in the current class.
        //
        // self = refers to the current class
        // ::   = scope resolution operator
        // MESSAGE = class constant
        //
        // We do NOT use $this->MESSAGE
        // because MESSAGE is a constant,
        // not a normal object property.
    }
    
    echo Goodbye::MESSAGE;
    $goodbye = new Goodbye();
    // We can access a public class constant directly
    // using ClassName::CONSTANT_NAME.
    //
    // We do not need to create an object.

    $goodbye->bye();

    ?>
</body>
</html>