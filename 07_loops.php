<?php

// while
// while (this condition is true) {
//   // do something
// };



// Loop with $counter
$counter = 0;

while ($counter < 10) {
  echo $counter . '<br>';
  $counter++;
}



// do - while
do {
  echo $counter . '<br>';
  $counter++;
} while ($counter < 0);



// for
for ($i = 0; $i < 10; $i++) {
  echo $i . '<br>';
}



// foreach
$fruits = ["Banana", "Apple", "Orange"];

foreach ($fruits as $fruit) {
  echo $fruit . '<br>';
}


foreach ($fruits as $i => $fruit) {
  echo $i .': ' . $fruit . '<br>';
}



// Iterate Over associative array.
$person = [
  'name' => 'Todd',
  'surname' => 'Spainhour',
  'age' => 40,
  'hobbies' => ['hiking', 'video games']
];

foreach ($person as $key => $value) {
  // echo $key . ': ' . $value . '<br>'; // this causes error Array to string conversion because of array within array
  
  if (is_array($value)) {
    // this handle looping over an array within an array
    echo $key . ': ' . implode(",", $value) . '<br>';
  } else {
    echo $key . ': ' . $value . '<br>'; // 
  }
}
