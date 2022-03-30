<?php
// Fibonacci series is the one in which you will get your next term by adding previous two numbers.
/* 0 1 1 2 3 5 8 13 21 34  
Here, 0 + 1 = 1  
        1 + 1 = 2  
        3 + 2 = 5   */

$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 12 numbers: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;
}
?>