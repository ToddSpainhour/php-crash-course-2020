<?php

// Function which prints "Hello I am Zura"
function hello() 
{
  echo "Hello there. I'm Todd." . '<br>';
}

hello();



// Function with argument
function hello2($name) 
{
  echo "Hello there. I am $name." . '<br>';
}

hello2('Jimbo McLean');
hello2('Cindy Loo');

function hello3($name) 
{
  return "Hello there. I am $name." . '<br>';
}

echo hello3('Jimbo McLean');
echo hello3('Cindy Loo');



// Create sum of two functions
function sum($a, $b) 
{
  return $a + $b;
}

echo sum(4, 5) . '<br>';



// Create function to sum all numbers using ...$nums
function sumManyArguments(...$nums) 
{
  $total = 0;
  for ($i = 0; $i < count($nums); $i++) {
    $total += $nums[$i];
  }
  return $total;
}

echo sumManyArguments(1, 2, 3, 4, 5, 6) . '<br>';



// Arrow functions
function sumManyArgumentsArrowFunction(...$nums) 
{
  return array_reduce($nums, fn($a, $b) => $a + $b);
}

echo sumManyArgumentsArrowFunction(1, 2, 3, 4, 5, 6);
