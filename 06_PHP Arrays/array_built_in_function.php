
<?php 
/*
    Built in function in array-
        1.array_shift()    It removes first item from array 
        2.array_unshift()  It remove last item from array
        3.array_push()     It add item in the last index of an array
        4.array_pop()      It add item in the first index of an array

*/
$students=["Amdad","Dipa","Lopa","Tumpa","Mili"];
//var_dump($students);

$stu=array_shift($students);
$stu=array_pop($students);
array_push($students,"Mizan"); 
array_unshift($students,"Jamirul"); 
$students[]="Karim";
$n=count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}




