<?php
/*
   The ternary operator (?:) is a conditional operator used to perform a simple comparison or check on a condition having simple statements.

    Syntax:
    (Condition) ? (Statement1) : (Statement2);

    Advantages of Ternary Operator:
    -   The readability of the code will increase with the usage of conditional statements.
    -   The use of the ternary operator makes the code simpler.
*/
    $age = 20;
    print ($age >= 18) ? "Adult" : "Not Adult";

    $a = 10;
    $b = $a > 15 ? 20 : 5;
    print ("\nValue of b is " . $b);