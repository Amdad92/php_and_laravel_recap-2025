<?php 
/*
    PHP do-while Loop:
        The do-while loop in PHP is a control flow statement that executes a block of code at least once, then repeatedly executes the block as long as a specified condition evaluates to true. This makes it a post-test loop, as the condition is checked after executing the loop body.

        syntax:
            do {
                Code to be executed
            } while (condition);

*/
    // print number 1 to 5.
    $counter=1;
    do{
        echo "$counter\n";
        $counter++;
    } while($counter<=5);

?>