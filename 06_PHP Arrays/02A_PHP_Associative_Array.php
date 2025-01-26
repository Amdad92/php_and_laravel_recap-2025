<?php
$foods=[
    'vegetable'=>'potato, ginger, carrot',
    'fruits'=>'Mango, Banana, Orange',
    'rice'=>'Polao, Biriyani, Plain rice',
];
// echo $foods['vegetable']."\n";
// echo $foods['fruits'];

foreach($foods as $food){
    echo $food."\n";
}

echo "-------------------\n";

foreach($foods as $key=>$value){
    echo $key.": ".$value."\n";
}

//array_keys() returns key from associative array
print_r(array_keys($foods));

//array_values() returns value from associative array
print_r(array_values($foods));