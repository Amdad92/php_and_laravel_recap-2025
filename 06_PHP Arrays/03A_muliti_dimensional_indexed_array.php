<?php 
 // Indexed Multidimensional Array
 $matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matrix[0][0]."\n"; //first array first item
echo $matrix[0][1]."\n"; //first array second item
echo $matrix[0][2]."\n"; //first array 3rd item
echo $matrix[1][0]."\n"; //2nd array first item
echo $matrix[1][1]."\n"; //2nd array 2nd item
echo $matrix[1][2]."\n"; //2nd array 3nd item
echo $matrix[2][0]."\n"; //3rd array first item 
echo $matrix[2][1]."\n"; //3rd array 2nd item
echo $matrix[2][2]."\n"; //3rd array 3rd item

echo "----------------\n";

//Access these array element using foreach

foreach($matrix as $row){
    foreach($row as $item){
        echo $item." ";
    }
  echo PHP_EOL;
}
echo "----------------\n";

// Example-2: Calculate the sum of total matrix value;

$matrix2 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16],
];

foreach($matrix2 as $row){
    foreach($row as $item){
        echo $item." ";
    }
  echo PHP_EOL;
}
echo "----------------\n";

$totalSumOfMatrix2=0;

foreach($matrix2 as $row){
    foreach($row as $element){
        $totalSumOfMatrix2 += $element;
    }
}
echo "The sum of total matrix value is: ".$totalSumOfMatrix2;