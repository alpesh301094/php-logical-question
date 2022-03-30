<?php
$a = 10;
$b = 20;

// Using Third Variable ----
/* $c = $a; // 10
$a = $b; // 20
$b = $c; // 10

echo "A value".$a;
echo "=====";
echo "B value".$b; */
// -------------------

// Without using Third Variable
$a = $a + $b; // 30
$b = $a - $b; // 10
$a = $a - $b; // 20

echo "A value".$a;
echo "=====";
echo "B value".$b;

?>  