<?php 
/*
    syntax:

    switch(n) {
    case statement1:
        code to be executed if n==statement1;
        break;
    case statement2:
        code to be executed if n==statement2;
        break;
    case statement3:
        code to be executed if n==statement3;
        break;
    case statement4:
        code to be executed if n==statement4;
        break;
    ......
    default:
        code to be executed if n != any case;
*/
$n = "February"; 
  
switch($n) { 
    case "January": 
        echo "Its January"; 
        break; 
    case "February": 
        echo "Its February"; 
        break; 
    case "March": 
        echo "Its March"; 
        break; 
    case "April": 
        echo "Its April"; 
        break; 
    case "May": 
        echo "Its May"; 
        break; 
    case "June": 
        echo "Its June"; 
        break; 
    case "July": 
        echo "Its July"; 
        break; 
    case "August": 
        echo "Its August"; 
        break; 
    case "September": 
        echo "Its September"; 
        break; 
    case "October": 
        echo "Its October"; 
        break; 
    case "November": 
        echo "Its November"; 
        break; 
    case "December": 
        echo "Its December"; 
        break; 
    default: 
        echo "Doesn't exist"; 
} 

?>