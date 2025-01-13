<?php 
// decimal base integers
$deci1 = 50; 
$deci2 = 654; 

// octal base integers
$octal1 = 07; 

$sum=$deci1+$deci2;
echo $sum.PHP_EOL;

//returns data type and value
var_dump($sum);

/*
    Task-1: Write a PHP script that convert a decimal number into its binary,octal, and hexadecimal representations.
*/
$decimal=255;
echo "Decimal:". $decimal."\n";
echo "Binary:".decbin($decimal)."\n";
echo "Octal:".decoct($decimal)."\n";
echo "Hexadecimal:".dechex($decimal)."\n";

/*
    Task-2: Create a script that takes an octal and hexadecimal number as input and converts them to decimal. 
*/
$oct="075"; // (Octal 75 in PHP is written with a leading zero.)
$hexadecimal ="0x1A"; //(Hexadecimal 1A is written with leading 0x)

//convert to decimal
$decimalFromOctal=octdec($oct);
$decimalFromHex=hexdec($hexadecimal);
echo "Octal $oct in Decimal: $decimalFromOctal"."\n";
echo "Hexadecimal $hexadecimal in Decimal: $decimalFromHex";
?>