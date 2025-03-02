<?php
/*
Create a PHP program that calculates the area of different shapes using the concept of abstraction.

1. Create an Abstract Class:
    - Define an abstract class named Shape with the following:
    - An abstract method area() that must be implemented by child classes.

2. Create Child Classes:

    Circle:
        - Add a property $radius.
        - Implement the area() method to calculate the area of a circle using the formula
        
    Rectangle:
        - Add properties $length and $width.
        - Implement the area() method to calculate the area of a rectangle using the formula

3. Create Objects and Display Results:
        - Create an object of the Circle class with a radius of 50.
        - Create an object of the Rectangle class with a length of 50 and a width of 40.

4. Additional Requirements:

        - Use the pi() function in PHP for the value of π.
        - Ensure all properties are encapsulated (use private or protected).  
        - Use constructors to initialize the properties of the child classes.
*/

// Abstract class representing a Shape
abstract class Shape {
    // Abstract method to calculate area
    abstract public function area();
}

// Class to calculate the area of a Circle
class Circle extends Shape {
    private $radius;

    // Constructor to initialize radius
    public function __construct($r) {
        $this->radius = $r;
    }

    // Implementation of area() for Circle
    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

// Class to calculate the area of a Rectangle
class Rectangle extends Shape {
    private $length;
    private $width;

    // Constructor to initialize length and width
    public function __construct($l, $w) {
        $this->length = $l;
        $this->width = $w;
    }

    // Implementation of area() for Rectangle
    public function area() {
        return $this->length * $this->width;
    }
}

// Create a Circle object and calculate its area
$circleArea = new Circle(50);
echo "The area of the circle is: " . $circleArea->area() . " square units" . PHP_EOL;

// Create a Rectangle object and calculate its area
$rectangleArea = new Rectangle(50, 40);
echo "The area of the rectangle is: " . $rectangleArea->area() . " square units" . PHP_EOL;