<?php
// Using Loop
$num = 4;
$factorial = 1;  
for ($x = $num; $x >= 1; $x --)   
{  
  $factorial = $factorial * $x;
}  
// 4,12,24
echo "Factorial of $num is $factorial";

// Using Recursion
/* function fact ($n)  
{  
    if($n <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $n * fact($n - 1);  
    }  
}  
echo "Factorial of 4 is " .fact(4); */  
