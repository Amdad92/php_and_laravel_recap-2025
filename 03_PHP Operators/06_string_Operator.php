<?php
/*
    This operator is used for the concatenation of 2 or more strings using the concatenation operator (‘.’).

    .	Concatenation	                $x.$y	Concatenated $x and $y
    .=	Concatenation and assignment	$x.=$y	First concatenates then assigns, same as $x = $x.$y
*/
$x = "Amdadul Islam";
$y = ", Instructor";
$z = ", C Programming";
echo $x . $y . $z, "\n";
$x .= $y . $z;
echo $x;