<?php
/* An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
0, 1, 153, 371, 407, 471, etc are Armstrong numbers. 
407 = (4*4*4) + (0*0*0) + (7*7*7)  
        = 64 + 0 + 343  
407 = 407  
*/
$num = 153;
$total = 0;
$x = $num;
while ($x != 0) {
    $rem = $x % 10;
    $total = $total + $rem * $rem * $rem;
    $x = $x / 10;
}
if ($num == $total) {
    echo "Yes it is an Armstrong number";
} else {
    echo "No it is not an armstrong number";
}