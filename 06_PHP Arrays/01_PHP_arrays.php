<?php 
/*
    Array in PHP:
    In PHP, an array is a versatile and powerful data structure used to store multiple values in a single variable. Arrays are one of the most commonly utilized tools in PHP due to their flexibility and capability to handle various types of data.
    
    Types of Arrays in PHP:

    1.  Indexed Array (Numerical Array):
        Stores elements with numeric indexes starting from 0 by default.

    2.  Associative Array:
        Uses custom keys (strings or numbers) to associate values, providing a key-value mapping.
    
    3.  Multidimensional Array:
        Contains arrays within arrays, useful for representing complex data structures like tables or matrices.
        
*/
        // 1. Example: Indexed Array (Numerical Array)

            $fruits = ["Apple", "Banana", "Cherry"];
            echo $fruits[0]; // Output: Apple

            echo "\n";

       // 2.  Example: Associative Array

            $person = ["name" => "John", "age" => 30];
            echo $person["name"].PHP_EOL; // Output: John
            echo $person["age"];  //Output: 30
       
            echo "\n";

        // 3.  Example: Multidimensional Array

            $matrix = [
                [1, 2, 3],
                [4, 5, 6],
                [7, 8, 9]
            ];
            echo $matrix[1][2]; // Output: 6
?>