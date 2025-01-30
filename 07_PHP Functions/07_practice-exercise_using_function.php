<?php 
/*
p-1: Create a function called multiplyNumbers() that takes two numbers as parameters and returns their product.

p-2: Write a function called isEven() that takes a number as input and returns true if the number is even, otherwise false.

p-3: Create a function called generateUsername() that takes a first name and last name as parameters and returns a username in the format firstname.lastname.

*/

// sol-p-1:
function multiplyNumbers($n1,$n2){
    $multiplication=$n1 * $n2;
    return $multiplication;
}
$result_multiply=multiplyNumbers(10,15);
echo $result_multiply;

echo "\n";

// sol-p2: 
function isEven($n){
    if($n%2==0){
        return true;
    }else{
        return false;
    }
}
$result_isEven=isEven(12);
echo $result_isEven ? 'true' : 'false'; 

