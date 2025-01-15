<?php 
    /*
        PHP echo Statement:
        .   It can be used without parentheses:
        .   Or with parentheses (though not required):
    */

        echo "Hello, world"."\n";
        echo ("Hello, world").PHP_EOL; //PHP_EOL also act like \n

        // Displaying Variables with echo
  
        $text= "Amdadul Islam";
        $num1=10;
        $num2=20;
     
        echo $text."\n";
        echo $num1."\n";
        echo $num2."\n";
        
    //  Displaying Strings as Multiple Arguments with echo

        echo "Amdadul Islam ","Instructor ","C Programming ","Bangladesh Navy.";

    //********************************************************************************

     /*
        PHP print Statement:
        .  Basic syntax of print is similar to echo, 
        .  But it can only output one string or variable at a time.
    */
        $text = "\n"."Hello, World!";
        $num1 = 10;
        $num2 = 20;
        print $text."\n";
        print $num1."\n";
        print $num2."\n";

    //Displaying String of Text with print Statement

    // print "Amdadul Islam ","Instructor ","C Programming ","Bangladesh Navy."; // it will through error

        print "Amdadul Islam, Instructor, C Programming, Bangladesh Navy";

     //********************************************************************************

    /* 
        #summery: The main difference between the print and echo statement is that echo does not behave like a function 
                    whereas print behaves like a function.
    */
?>