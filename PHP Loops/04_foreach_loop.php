<?php 
/*
    PHP foreach Loop:
       The foreach loop in PHP is a control structure designed specifically for iterating over elements in an array or an object. It simplifies traversing iterable data structures by providing a clean and readable syntax, making it one of the most commonly used loops for processing collections.

        Syntax:
        
        1. Iterating Over Arrays:

        foreach ( $array as $value ) {
         Code to be executed
        }

        2.  Iterating with Keys:

        foreach ( $array as $key => $value ) {
         Code to be executed
        }

*/
    $fruits = ["Apple", "Banana", "Cherry"];

    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit\n";
    }

    echo "\n";

    //Iterating Over an Associative Array
    
    $person = [
        "name" => "John Doe",
        "age" => 30,
        "profession" => "Web Developer"
    ];
    
    foreach ($person as $key => $value) {
        echo "$key: $value\n";
    }
?>