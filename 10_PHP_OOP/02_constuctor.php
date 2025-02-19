<?php
/*
__construct() Method: __construct is a public magic method that is used to create and initialize a class object.
__construct assigns some property values while creating the object. This method is automatically called when an object is created.

    __construct is a public magic method.
    __construct is a method that must have public visibility
    __construct method can accept one and more arguments.
    __construct method is used to create an object.
    __construct method can call the class method or functions
    __construct method can call constructors of other classes also.
*/

//Constructor without parameter:

    class Student {
        function __construct() {
            print "This is __construct without parameter. \n";
            print "Welcome to the world of PHP";
        }
    }
     
    $obj = new Student();

    echo "<br>";
   
//Constructor with parameter:
class Car {
   
    // Class properties
    public $brand;
    public $origin;
     
    // constructor with parameter
    public function __construct($brand, $origin) {
        $this->brand = $brand;
        $this->origin = $origin;
    }
 
      // Display car data
    public function display() {
        echo "Car brand is " . $this->brand 
              . "<br>Origin is " . $this->origin; 
    }
}
     
// Create class object and pass value
$carInfo = new Car("Toyota", "Japan");
$carInfo->display(); 