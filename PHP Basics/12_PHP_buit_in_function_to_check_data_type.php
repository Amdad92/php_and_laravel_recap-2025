<?php
/*
PHP Functions to Check Data Types
PHP provides several functions to check the type of variables, such as:

is_int(): Checks if a variable is an integer.
is_string(): Checks if a variable is a string.
is_array(): Checks if a variable is an array.
is_object(): Checks if a variable is an object.
is_bool(): Checks if a variable is a boolean.
is_null(): Checks if a variable is NULL.
 */

$var = 42;
echo is_int( $var ) ? "It's an integer." : "It's not an integer.";

$var = "Hello, World!";
echo is_string( $var ) ? "It's a string." : "It's not a string.";

$var = [1, 2, 3];
echo is_array( $var ) ? "It's an array." : "It's not an array.";

class Car {}
$var = new Car();
echo is_object( $var ) ? "It's an object." : "It's not an object.";

$var = true;
echo is_bool( $var ) ? "It's a boolean." : "It's not a boolean.";

$var = NULL;
echo is_null( $var ) ? "It's null." : "It's not null.";
?>