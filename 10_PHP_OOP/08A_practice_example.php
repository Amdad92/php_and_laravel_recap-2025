<?php
/*


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