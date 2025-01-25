<?php
/*
Associative Arrays in PHP:
- Associative arrays are a type of array where keys are not sequential integers but custom strings or values.
- These keys allow developers to create more meaningful connections between the key-value pairs.

Why Use Associative Arrays?
- Readable Keys: You can use descriptive names for keys.
- Efficient Access: Retrieve data using specific names instead of numeric indices.
- Flexibility: Ideal for representing real-world entities like user profiles, product details, etc.

Syntax:
Create an associative array

$array = [
"key1" => "value1",
"key2" => "value2",
"key3" => "value3",
];

Accessing values
echo $array["key1"]; // Outputs: value1

 */
// Example-1: Create a user profile using associative  array.

$userInfo = [
    "name"    => "Amdadul Islam",
    "age"     => 30,
    "email"   => "emdadctg92@gmail.com",
    "contact" => "01647466326",
];

echo "User Information:\n";

foreach ( $userInfo as $key => $value ) {
    echo ucfirst( $key ) . ": " . $value . "\n";
}

/*
The ucfirst() function in PHP is a built-in function that converts the first character of a string to uppercase, leaving the rest of the string unchanged.
 */

// Example-2 Create an associative array for subject mark and display the to mark and average result.

$marks = [
    "Math"      => 65,
    "Chemistry" => 75,
    "English"   => 80,
];
$total = 0;

foreach ( $marks as $subject => $score ) {
    echo( $subject ) . ":" . $score . "\n";
    $total += $score;
}

echo "Total mark:" . $total . "\n";
$average = $total / 3;
echo "Average mark:" . $average;
?>