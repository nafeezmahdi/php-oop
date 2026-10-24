<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    abstract class Car {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        abstract public function intro();
    }
    // An abstract class is a class that cannot be
    // instantiated directly using the 'new' keyword.
    // We use 'abstract' before 'class' to declare it.
    // A child class can inherit from this class.
    // ABSTRACT METHOD
    // An abstract method has no body here.
    // It only declares the method that child classes
    // must implement.
    // Any concrete child class must provide an
    // implementation of this method.
    // In addition, intro() is an abstract method that must be implemented in all the child classes.

    class Audi extends Car {
        public function intro() {
            return "German quality! I'm an $this->name!";
        }
    }  
     // The child class implements the abstract method.
     // This is called implementing an abstract method.
     // It must implement the abstract intro() method.
     // The method must be compatible with the
     // declaration in the parent class. 
     // Return a string containing the car's name.
     // $this->name accesses the current object's
     // name property, which was initialized
     // by the inherited constructor. 
     
    class Citroen extends Car {
        public function intro() {
            return "French extravagance! I'm a $this->name!<br>";
        }
    }

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";
    // Call the intro() method on the Audi object.
    // The method returns a string.
    // echo displays the returned string in the browser.

    $citroen = new Citroen("Citroen");
    echo $citroen->intro();

    abstract class ParentClass {
        abstract protected function prefixName($name);
    }
    // An abstract class cannot be instantiated directly.
    // It is designed to be inherited by child classes. 
    // This is an abstract method.
    // 'abstract' means the method has no body here.
    // 'protected' means it can be accessed inside
    // this class and its child classes.
    // A concrete child class must implement this method.
    // $name is the parameter that the method receives.

    class ChildClass extends ParentClass {
        public function prefixName($name) {
        if ($name == "John Doe") {
        $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
        $prefix = "Mrs.";
        } else {
        $prefix = "";
        }
        return "$prefix $name";    
        }
        // Implement the abstract method.
        // Notice that the method is PUBLIC here,
        // even though it was PROTECTED in ParentClass.
        // This is allowed because a child class can
        // increase a method's visibility from protected
        // to public, but cannot reduce it to private.
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
    echo "<br>";
    echo $class->prefixName("Baby Doe");
    echo "<br>";


    abstract class ParentClassTwo {
    // Abstract method with one argument
    abstract protected function prefixName($name);
    }
    // Declare an abstract method with one parameter.
    // 'abstract' means the method has no body here.
    // 'protected' means the method can be accessed
    // inside this class and its child classes.
    // The child class must implement this method.
    // The parent requires only one parameter: $name.

    class ChildClassTwo extends ParentClassTwo {
    // The child class may define optional arguments that is not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
        $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
        $prefix = "Mrs";
        } else {
        $prefix = "";
        }
        return "$greet $prefix$separator $name";
    }
    // Implement the parent's abstract method.
    // The parent declares one parameter: $name.
    // The child adds two OPTIONAL parameters:
    // $separator = "."
    // $greet = "Dear"
    // This is allowed because the additional
    // parameters have default values.
    // Therefore, calling this method with only
    // one argument is still valid.
    }

    $classTwo = new ChildClassTwo;
    echo $classTwo->prefixName("John Doe");
    echo "<br>";  
    echo $classTwo->prefixName("Jane Doe");

    ?>
</body>
</html>