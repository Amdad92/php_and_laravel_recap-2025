<?php
/*
    Functions can also return values using the return statement. This is useful when you want to perform a calculation or process data and use the result elsewhere in your program.

*/
// Example: Create a function that adds two numbers and returns the result.
function addNumbers($num1, $num2){
    $sum= $num1 + $num2;
    return $sum;
}
$result= addNumbers(50,60);
echo "The sum is : ".$result;

// Create a function to find maximum.
function findMax($n1,$n2){
    if($n1>$n2){
        return "\n".$n1." is a maximum number";
    }else{
        return "\n".$n2." is a maximum number";
    }
}
$result=findMax(50,60);
echo $result;