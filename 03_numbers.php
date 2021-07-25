<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;



// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
echo $a + $b . '<br>';



// Assignment with math operators
$a += $b;  echo $a.'<br>'; // same as $a = $a + $b;
$a -= $b;  echo $a.'<br>'; // same as $a = $a - $b;
$a *= $b;  echo $a.'<br>'; // same as $a = $a * $b;
$a /= $b;  echo $a.'<br>'; // same as $a = $a / $b;
$a %= $b;  echo $a.'<br>'; // same as $a = $a % $b;



// Increment operator
echo $a++.'<br>';
echo ++$a;



// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';



// Number checking functions
is_float(1.24); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true even though it's a string number
is_numeric("3g.45"); // false



// Conversion
$strNumber = '12.34';
$number = (int)$strNumber; // casting string to int
var_dump($number);



// Number functions
echo "abs(-15)" . '=' . abs(-15) . '<br>'; // absolute value
echo "pow(2, 3)" . '=' . pow(2, 3) . '<br>'; // first number power of second number 
echo "sqrt(16)" . '=' . sqrt(16) . '<br>'; // squre root
echo "max(2, 9, 3)" . '=' . max(2, 9, 3) . '<br>'; // find biggest value
echo "min(2, 3)" . '=' . min(2, 3) . '<br>'; // find smallest value
echo "round(2.4)" . '=' . round(2.4) . '<br>'; // normal rounding
echo "round(2.6)" . '=' . round(2.6) . '<br>'; // normal rounding
echo "ceil(2.4)" . '=' . ceil(2.4) . '<br>'; // round up
echo "floor(2.6)" . '=' . floor(2.6) . '<br>'; // round down



// Formatting numbers
$number = 123456789.12345; // 
echo number_format($number, 2, '.', ','); 
// number_format(variable, number of digits after decimal, what to use in place of decimal point, what to use for thousands separator)



// https://www.php.net/manual/en/ref.math.php
