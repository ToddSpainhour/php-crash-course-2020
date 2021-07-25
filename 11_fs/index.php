<?php

// Magic constants
echo __DIR__.'<br>'; // prints current directory where this file is located
echo __FILE__.'<br>'; // prints current file
echo __LINE__.'<br>'; // prints current line



// Create directory
//mkdir('test'); // cretes new directory



// Rename directory
//rename('test', 'test2'); // rename directory from argument 1 to argument 2



// Delete directory
//rmdir('test2'); // deletes directory



// Read files and folders inside directory
$files = scandir('../'); // ./ current directory, ../ parent directory
echo '<pre>';
var_dump($files);
echo '<pre>';



// file_get_contents
echo file_get_contents('lorem.txt');



// file_put_contents
file_put_contents('sample.txt', 'Brand new content created from another file'); // new file name, content to add



// file_get_contents from URL
$usersDataFromURL = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersDataFromURL;



// convert json data to array
$userDataArray = json_decode($usersDataFromURL, true); // converts to array by adding true as second argument
//$userDataArray = json_decode($usersDataFromURL); // without second argument it converts json to an object
echo '<pre>';
echo '---- json converted to array below ----' . '<br>';
var_dump($userDataArray);
echo '<pre>';



// file_exists
file_exists('sample.txt'); //returns true



// is_dir
is_dir('test'); // returns false



// https://www.php.net/manual/en/book.filesystem.php

