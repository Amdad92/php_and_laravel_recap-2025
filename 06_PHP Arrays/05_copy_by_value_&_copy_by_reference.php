<?php 
$a = 10;
$b = $a; // Copy by value

$b = 20; // Change $b
echo "Value of a: $a\n"; // $a remains unchanged (10)
echo "Value of b: $b\n"; // $b is now 20

$x = 10;
$y = &$x; // Copy by reference

$y = 20; // Change $y
echo "Value of x: $x\n"; // $x is also updated to 20
echo "Value of y: $y\n"; // $y is 20





