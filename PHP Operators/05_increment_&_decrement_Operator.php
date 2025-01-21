<?php
/*
    These are called the unary operators as they work on single operands.
    These are used to increment or decrement values.

    ++	Pre-Increment	++$x	First increments $x by one, then return $x
    --	Pre-Decrement	--$x	First decrements $x by one, then return $x
    ++	Post-Increment	$x++	First returns $x, then increment it by one
    --	Post-Decrement	$x--	First returns $x, then decrement it by one

*/
        $x = 2;
        echo ++$x, " First increments then prints \n";
        echo $x, "\n";

        $x = 2;
        echo $x++, " First prints then increments \n";
        echo $x, "\n";

        $x = 2;
        echo --$x, " First decrements then prints \n";
        echo $x, "\n";

        $x = 2;
        echo $x--, " First prints then decrements \n";
        echo $x;
