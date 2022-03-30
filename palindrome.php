<?php  
/* A palindrome number is a number which remains same when its digits are reversed.
For example, number 24142 is a palindrome number. On reversing it we?ll get the same number. */
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
    $rem = $number % 10;
    $sum = $sum * 10 + $rem;
    $number = $number/10;  
}  
return $sum;  
}
  
$input = 121;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  

// Using function 
/* $num = 121;  
$reverse = strrev($num);  
if($num == $reverse){  
    echo "The number $num is Palindrome";     
}else{  
    echo "The number $num is not a Palindrome";   
} */
?>  