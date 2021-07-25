<?php

// Variable types
// string, int, float (or double), bool, array, object, null



// Declare variables
$name = 'Todd'; 
$age = 40; 
$hungerLevel = 0.3; 
$isExcitedAboutPHP = true; 
$salary = null; 



// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $hungerLevel . '<br>';
echo $isExcitedAboutPHP . '<br>';
echo $salary . '<br>';



// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($hungerLevel) . '<br>';
echo gettype($isExcitedAboutPHP) . '<br>';
echo gettype($salary) . '<br>';



// Print the whole variable
var_dump($name) . '<br>';
var_dump($age) . '<br>';
var_dump($hungerLevel) . '<br>';
var_dump($isExcitedAboutPHP) . '<br>';
var_dump($salary) . '<br>';



// Change the value/type of the variable
$name = false;



// Print type of the variable
echo gettype($name).'<br>';



// Variable checking functions
is_string($name); // false
is_int($age); // true
is_float($hungerLevel); // true
is_bool($isExcitedAboutPHP); //true



// Check if variable is defined
isset($name); // true
isset($address); // false


// Constants
define('PI', 3.14);
echo PI.'<br>';



// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
