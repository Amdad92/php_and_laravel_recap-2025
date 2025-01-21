<?php 
/*
    PHP break Statement:

    The break statement is used to exit a loop or switch statement immediately, regardless of the remaining iterations or cases.

    Use Case:
    You might use break when a specific condition is met, and continuing the loop is unnecessary.

*/
    
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break; // Exit the loop when $i equals 5
        }
        echo $i . " ";
    }

?>