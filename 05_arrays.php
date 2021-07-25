<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"]; // single or double quotes ok; for a variable use double quotes
// $fruits = array(); is the old way to declare an array 



// Print the whole array
var_dump($fruits);
// to make it more readable wrap the dump with <pre> tags
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Get element by index
echo $fruits[1] . '<br>';



// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Check if array has element at index 2
isset($fruits[2]); // true; there is an item at index position 2; if not... false



// Append element
$fruits[] = 'Banana'; // like JavaScript's .push
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Print the length of the array
echo count($fruits) . '<br>';



// Add element at the end of the array
array_push($fruits, "Grape"); // first argument is the array; second is the value to add
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Add element at the beginning of the array
array_unshift($fruits, 'Cherry');
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Remove element from the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Split the string into an array
$string = "newBanana,newApple,newPeach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';



// Combine array elements into string
echo implode("&", $fruits);



// Check if element exist in the array
echo '<pre>';
var_dump(in_array("Apple", $fruits));// true
var_dump(in_array("Mango", $fruits));// fasle
echo '</pre>';



// Search element index in the array
echo '<pre>';
var_dump(array_search('Mango', $fruits)); // false
var_dump(array_search('Apple', $fruits)); // returns index position if true
echo '</pre>';



// Merge two arrays
$vegetables = ["Potato", "Cucumber"];

$fruitsAndVeggiesArray = array_merge($fruits, $vegetables); // combined in order of arguments
echo '<pre>';
var_dump($fruitsAndVeggiesArray);
echo '</pre>';



 // spread operator to combine arrays
$fruitsAndVeggiesArrayWithSpreadOperator = ([...$fruits, ...$vegetables]); // combined in order of arguments
echo '<pre>';
var_dump($fruitsAndVeggiesArrayWithSpreadOperator);
echo '</pre>';



// Sorting of array
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Reverse sorting of array
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// https://www.php.net/manual/en/ref.array.php



// ============================================
// Associative arrays
// ============================================



// Create an associative array
$person = [
  'name' => 'Todd',
  'surname' => 'Spainhour',
  'age' => 40,
  'hobbies' => ['hiking', 'video games']
];
echo '<pre>';
print_r($person); // print_r formats the output in a more readable way
echo '</pre>';



// Get element by key
echo $person['name'].'<br>'; // returns value for name key
echo $person['address'].'<br>'; // if key doesn't exist it returns error saying Undefined Index;



// Set element by key
$person['current activity'] = 'Learning PHP'; // create new key value pair
echo '<pre>';
print_r($person); 
echo '</pre>';



// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])) {
//   $person['address'] = 'unknown';
// } // if this key doesn't exist, create it and set it specified value
// echo '<pre>';
// print_r($person); 
// echo '</pre>';

// here's the PHP 7.4 way to do the same thing
$person['address'] ??= 'unknown'; // ??= is this value set?
echo '<pre>';
print_r($person); 
echo '</pre>';



// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '<pre>';



// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '<pre>';



// Sorting associative arrays by keys
ksort($person);
echo '<pre>';
var_dump($person);
echo '<pre>';



// Sorting associative arrays by values
asort($person); 
echo '<pre>';
var_dump($person);
echo '<pre>';



// Two dimensional arrays
$todos = [
  ['title' => 'title 1', 'completed' => true],
  ['title2' => 'title 2', 'completed' => false]
];
echo '<pre>';
var_dump($todos);
echo '<pre>';
