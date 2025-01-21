<?php 
/*
    PHP continue Statement:
        The continue statement is used to skip the current iteration of a loop and move to the next iteration without exiting the loop.

        use case:
        You might use continue to ignore specific conditions while still completing the loop.
*/
    
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue; // Skip even numbers
        }
        echo $i . " ";
    }

?>