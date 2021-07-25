<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
  echo "age is 20" . '<br>';
}



// Without circle braces
if ($age === 20) echo "age is 20" . '<br>';



// Sample if-else
if ($age > 20) {
  echo "older than 20" . '<br>';
} else {
  echo "less than or equal to 20" . '<br>';
}



// Difference between == and ===
if ($age == 20) {
  // == compares values
  // this returns true
  echo "age == 20" . '<br>';
};

if ($age == '20') {
  // == compares values
  // this returns true
  echo "age == string type '20'" . '<br>';
  echo "the variable age is an int and '20' is a string but are equal when using ==" . '<br>';
}

if ($age === 20) {
  // === compares values and types
  // this returns true
  echo "age === int 20" . '<br>';
  echo "the variable age is an int and '20' is a string but are equal when using ==" . '<br>';
}

if ($age === '20') {
  // === compares values and types
  // this returns false
  echo "age doe not equal === string type '20'" . '<br>';
  echo "the variable age is an int and '20' is a string and are not equal ===" . '<br>';
}



// if AND
if ($age == 20 && $salary === 300000) {
  echo '$age == 20 && $salary === 300000 is true' . '<br>';
}



// if OR
if ($age >> 20 || $salary === 300000) {
  echo '$age > 20 || $salary === 300000 is true' . '<br>';
}



// Ternary if
echo $age < 22 ? 'age is less than 22' : 'age is not less than 22';



// Short ternary
$myAge = $age ?: 18; // if age doesn't exist, create it and assign it this value
//important: if $age were 0, it would behave like the variable didn't exist
echo '<pre>';
var_dump($myAge);
echo '</pre>';



// Null coalescing operator
$myName = isset($name) ? $name : 'Jimbo'; // If $name doesn't exist, create it with this value
$myName = $name ?? 'Jimbo'; // same as above. 
echo $myName . '<br>';
echo $myName . '<br>';



// switch
$userRole = 'admin'; // editor, user, admin
switch($userRole) {
  case 'admin':
    echo 'Your role is admin';
    break;
  case 'editor':
    echo 'Your role is editor';
    break;
  case 'user':
    echo 'Your role is user';
    break;
    default:
      echo 'Invalid Role. Pleas pick one of the following: admin, editor, user, or admin.';
}
