<?php 
$users = [
    "user1" => ["name" => "Alice", "age" => 25, "email" => "alice@example.com"],
    "user2" => ["name" => "Bob", "age" => 30, "email" => "bob@example.com"],
    "user3" => ["name" => "Charlie", "age" => 35, "email" => "charlie@example.com"],
];

//Loop through each array

foreach($users as $userId=>$details){ //This loop display userID.
    echo ucfirst($userId)."\n";
    foreach($details as $key=>$value){ //This loops display users key and value.
        echo ucfirst($key).": ".$value."\n";
    }
}
