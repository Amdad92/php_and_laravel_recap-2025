<?php 
/*
        
    ফাংশন/মেথড	কাজ

    - empty()	ভেরিয়েবল খালি/অস্তিত্বহীন/false মান হলে true রিটার্ন করে

    - isset()	ভেরিয়েবল ডিক্লেয়ার করা হয়েছে এবং NULL না হলে true রিটার্ন করে

    - is_null()	ভেরিয়েবল NULL হলে true রিটার্ন করে

    - $var === ""	স্ট্রিক্টলি খালি স্ট্রিং চেক করে

    - Null Coalescing Operator (??): অপারেটর ভেরিয়েবল সেট না থাকলে ডিফল্ট মান অ্যাসাইন করে.
*/

//Example: Example of empty()

$var=([]);
if(empty($var)){
   echo "Variable is Empty";
}

echo "\n---------------------\n";

//Example: Example of isset()

$var2= "Hello";
if(isset($var2)){
    echo "variable is set";
}

echo "\n---------------------\n";

//Example: Example of is_null()

$var3=null;
if(is_null($var3)){
    echo "Variable is null";
}

echo "\n---------------------\n";

//Example: Example of ===

$var4="0";
if($var4===""){
    echo "This is an empty string";
}else echo "It has value";

echo "\n---------------------\n";

// Example: Null Coalescing Operator (??)

$username = $_POST["username"] ?? "অতিথি";
// যদি $_POST["username"] সেট না থাকে, তবে "অতিথি" অ্যাসাইন হবে