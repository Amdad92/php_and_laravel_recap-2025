<?php
/*
Syntax:
    if (condition) {
        if TRUE then execute this code
    }
    elseif {
        if TRUE then execute this code
    }
    elseif {
        if TRUE then execute this code
    }
    else {
        if FALSE then execute this code
    }
*/
    $month = "December"; 
    
    if ($month== "August") { 
        echo "Happy Birthday."; 
    } 
    
    elseif ($month == "December") { 
        echo "Happy Independence Day!!!"; 
    } 
    
    else{ 
        echo "Nothing to show"; 
    } 