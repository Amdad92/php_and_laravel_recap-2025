<?php 
    $name="Amdadul Islam";
    echo "The name of the PHP learner is: $name".PHP_EOL;
    var_dump($name);

    /*
        - Hold letters or any alphabets, even numbers are included. 
        - These are written within double quotes during declaration.
    */

    /* 
    Some Important Built-in String Functions

        1. PHP strlen() Function - This function is used to find the length of a string.
        2. PHP strrev() Function - This function is used to reverse a string.
        3. PHP str_replace() Function - Replace all occurrences of a search string with a replacement string
           within a given input string or array.
        4. PHP strtolower() এবং strtoupper() -Used for lowercase and uppercase conversion
        5. PHP trim() Function - It remove space before string and after string. 
        6. PHP explode() Function - Convert string into array.
        7. PHP implode() Function -Convert array to string.

    */

    // PHP strlen() Function -
        echo strlen("Hello Amdadul Islam\n");

    // PHP strrev() Function -
        echo strrev("Hello Amdad!");

    /*
    PHP str_replace() Function -

        syntax: str_replace($search, $replace, $subject, $count);
        
        # note: 
        str_replace PHP-র একটি খুব গুরুত্বপূর্ণ ফাংশন যা স্ট্রিং এর নির্দিষ্ট অংশকে খুঁজে বের করে এবং সেটাকে নির্ধারিত নতুন মান দিয়ে প্রতিস্থাপন (replace) করে।

    */
        $text = "\nI love PHP programming.";
        $search = "PHP";
        $replace = "Laravel";
    
        $result = str_replace($search, $replace, $text);
        echo $result;

        $text = "\nHello world! Learn PHP, JavaScript, and Python.";
        $search = ["PHP", "JavaScript", "Python"];
        $replace = ["Laravel", "React", "Django"];

        $result = str_replace($search, $replace, $text);
        echo $result;

    //PHP strtolower() & strtoupper() Function -
        $text = "\nHello World!";
        echo strtolower($text); 
        echo strtoupper($text);

   // PHP trim() Function -
        $text = "   Hello World!   ";
        echo trim($text);
    
    /* 
        PHP explode() function - স্ট্রিংকে একটি অ্যারেতে ভাগ করতে।
            syntax: explode($delimiter, $string, $limit);
    */
        $text = "apple,banana,orange";
        $result = explode(",", $text);
        print_r($result);

     /* 
        PHP implode() function - একটি অ্যারে থেকে স্ট্রিং তৈরি করতে।
            syntax: implode($delimiter, $array);
    */
        $array = ["apple", "banana", "orange"];
        echo implode(", ", $array);
?>