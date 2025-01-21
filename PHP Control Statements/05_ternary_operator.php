<?php 
/*
    Ternary Operators: PHP provides a shorthand way of writing if…else, called Ternary Operators.
    
        Syntax:
        (condition) ? if TRUE execute this : otherwise execute this;

*/

    $x = -12; 
    
    if ($x > 0) { 
        echo "The number is positive \n"; 
    } 
    else { 
        echo "The number is negative \n"; 
    } 

    //shorthand of the code using ternary.
    $a=5;
    echo($a>0) ?'The number is positive':
                 'The number is negative';
    $age=18;
    print($age>=18)? 'Adult': 'Not adult';

?>