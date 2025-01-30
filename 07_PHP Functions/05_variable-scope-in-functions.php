<?php 
/*
    Variables inside a function are local to that function, meaning they cannot be accessed outside of it. Similarly, variables outside a function are global and cannot be accessed inside the function unless explicitly declared.

   - $globalVar is accessible outside the function but not inside it.

   - $localVar is accessible only inside the function.
*/
$globalVar="I am a Global Variable";
function testScope(){
    $localVar="I am a Local Variable from testScop function";
    echo $localVar."\n";
   //  echo $globalVar; //it can't access inside a function

}
testScope();
echo $globalVar;