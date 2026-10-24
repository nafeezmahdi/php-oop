<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    interface Animals {
        public function makeSound();
    }
    // An interface defines a set of methods that
    // a class must implement.
    //
    // An interface does not provide the implementation
    // of the method in this example.
    //
    // We use the 'interface' keyword to create it
    // Declare a public method named makeSound().
    // There is no method body here.
    // Any class that implements Animal
    // must provide its own makeSound() method.

    class Cats implements Animals {
        public function makeSound() {
        echo "Meow <br>";
     }
    }
    // The 'implements' keyword means that Cat
    // agrees to follow the Animal interface.
    // Therefore, Cat must implement makeSound(). 


    class Dogs implements Animals {
        public function makeSound() {
    echo "Woff <br>";
    }
    }
    // Both Cat and Dog follow the same interface,
    // but their implementations are different.

    $cats = new Cats();
    $cats->makeSound();

    $dogs = new Dogs();
    $dogs->makeSound();

    // ============================================
// 1. CREATE AN INTERFACE
// ============================================

// An interface defines a contract that a class must follow.
//
// Any concrete class that implements Animal
// must implement BOTH fromFamily() and makeSound().
//
// An interface specifies which methods are required,
// but the implementing classes define what those methods do.

interface Animal {

    // First required method.
    // Each implementing class must define this method.
    public function fromFamily();

    // Second required method.
    // Each implementing class must define this method too.
    public function makeSound();
}


// ============================================
// 2. CREATE THE CAT CLASS
// ============================================

// The Cat class implements the Animal interface.
//
// 'implements' means Cat agrees to provide
// implementations of both required methods.

class Cat implements Animal {

    // Implementation of the first interface method.
    //
    // This method describes the cat's biological family.

    public function fromFamily() {

        echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
    }


    // Implementation of the second interface method.
    //
    // This method displays the sound made by a cat.

    public function makeSound() {

        echo "Sound: Meow.";
    }
}


// ============================================
// 3. CREATE THE DOG CLASS
// ============================================

// The Dog class also implements Animal.
//
// Therefore, Dog must implement both
// fromFamily() and makeSound().
//
// The methods have the same names as those in Cat,
// but their implementations can be different.

class Dog implements Animal {

    // Implementation of fromFamily() for dogs.

    public function fromFamily() {

        echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
    }


    // Implementation of makeSound() for dogs.

    public function makeSound() {

        // "Woof" is the conventional spelling
        // of a dog's sound.

        echo "Sound: Woof.";
    }
}


// ============================================
// 4. CREATE A CAT OBJECT
// ============================================

// Display a heading in the browser.

echo "<h3>Cats</h3>";


// Create an object from the Cat class.
//
// $cat now refers to a Cat object.

$cat = new Cat();


// Call the first method.
//
// PHP executes Cat's implementation of fromFamily().

$cat->fromFamily();


// Call the second method.
//
// PHP executes Cat's implementation of makeSound().

$cat->makeSound();


// ============================================
// 5. CREATE A DOG OBJECT
// ============================================

// Display a heading in the browser.

echo "<h3>Dogs</h3>";


// Create an object from the Dog class.

$dog = new Dog();


// Display information about the dog's family.

$dog->fromFamily();


// Display the dog's sound.

$dog->makeSound();

    ?>
</body>
</html>