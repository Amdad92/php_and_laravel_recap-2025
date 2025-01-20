<?php 
/*
    =   Assign                          $x = $y 
    +=  Add then Assign                 $x += $y    Simple Addition same as $x = $x + $y
    -=  Subtract then Assign            $x -= $y    Simple subtraction same as $x = $x – $y
    *=  Multiply then Assign            $x *= $y    Simple product same as $x = $x * $y
    /=  Divide then Assign (quotient)   $x /= $y    Simple division same as $x = $x / $y
    %=  Divide then Assign (remainder)  $x %= $y    Simple division same as $x = $x % $y
*/

// Simple assign operator
    $y = 75;
    echo $y, "\n";

// Add then assign operator
    $y = 100;
    $y += 200;
    echo $y, "\n";

// Subtract then assign operator
    $y = 70;
    $y -= 10;
    echo $y, "\n";

// Multiply then assign operator
    $y = 30;
    $y *= 20;
    echo $y, "\n";

// Divide then assign(quotient) operator
    $y = 100;
    $y /= 5;
    echo $y, "\n";

// Divide then assign(remainder) operator
    $y = 50;
    $y %= 5;
    echo $y;
?>