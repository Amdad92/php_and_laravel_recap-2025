<?php
$vegetables=['potato, ginger, carrot']; 
//print_r($vegetables);

$veg=explode(', ','potato, ginger, carrot'); // here we convert string to array using explode()
//var_dump($veg); //it returns array with size
//print_r($veg); // it returns array only

var_dump($veg);
echo "-------------------\n";
foreach($veg as $vegetable){
    echo $vegetable."\n";
}
echo "-------------------\n";
$vegString=join(', ',$veg);// here we convert an array to string.
var_dump($vegString);