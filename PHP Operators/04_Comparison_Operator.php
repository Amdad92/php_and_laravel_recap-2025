<?php
/*
    ==   Equal To                   $x == $y  Returns True if both the operands are equal
    !=   Not Equal To               $x != $y  Returns True if both the operands are not equal
    ===  Identical                  $x === $y Returns True if both the operands are equal and are of the same type
    !==  Not Identical              $x == $y  Returns True if both the operands are unequal and are of different types
    <    Less Than                  $x < $y   Returns True if $x is less than $y
    >    Greater Than               $x > $y   Returns True if $x is greater than $y
    <=   Less Than or Equal To      $x <= $y  Returns True if $x is less than or equal to $y
    >=   Greater Than or Equal To   $x >= $y  Returns True if $x is greater than or equal to $y
*/
$a = 80;
$b = 50;
$c = "80";

var_dump($a == $c);
echo "\n";

var_dump($a != $b);
echo "\n";

var_dump($a === $c);
echo "\n";

var_dump($a !== $c);
echo "\n";

var_dump($a < $b);
echo "\n";

var_dump($a > $b);
echo "\n";

var_dump($a <= $b);
echo "\n";

var_dump($a >= $b);
