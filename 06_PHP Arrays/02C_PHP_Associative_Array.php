<?php
$person1 = array("first_name" => "John", "last_name" => "Doe");
$person2 = ["first_name" => "Jane", "last_name" => "Smith"];

echo $person1["first_name"].PHP_EOL;
echo "--------------------\n";
foreach($person1 as $key=>$value){
    echo $key.": "."$value"."\n";
}