<?php
/* The factorial of a number n is defined by the product of all the digits from 1 to n (including 1 and n). 
4! = 4*3*2*1 = 24  
6! = 6*5*4*3*2*1 = 720  
*/
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
