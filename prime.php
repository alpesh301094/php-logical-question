<?php
/* A number which is only divisible by 1 and itself is called prime number. Numbers 2, 3, 5, 7, 11, 13, 17, etc. are prime numbers.
- 2 is the only even prime number.
- It is a natural number greater than 1 and so 0 and 1 are not prime numbers. */
$MyNum = 17;
$n = 0;

for($i = 2; $i < $MyNum; $i++) {
  if($MyNum % $i == 0){
    $n++;
    break;
  }
}

if ($n == 0){
  echo $MyNum." is a prime number.";
} else {
  echo $MyNum." is not a prime number.";
}
?>