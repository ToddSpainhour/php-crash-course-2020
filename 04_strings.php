<?php

// Create simple string
$name = 'Todd';
$singleQuoteString = 'Hello. My name is $name.';
$doubleQuoteString = "Hello. My name is $name."; // like JavaScript's template literal
echo $singleQuoteString.'<br>';
echo $doubleQuoteString.'<br>';



// String concatenation
echo 'Hello '.' world '.' and PHP'.'<br>';



// String functions
$exampleString = "     Hello World     "; // has extra spaces

echo  $exampleString . '<br>';
echo " strlen: " . strlen($exampleString) . '<br>'; // length of string
echo " trim: " . trim($exampleString) . '<br>'; // removes whitespace from beginning and end of string
echo " ltrim: " . ltrim($exampleString) . '<br>'; // removes whitespace from the left side of the string
echo " rtrim: " . rtrim($exampleString) . '<br>'; // removes whitespace from the right side of the string
echo " str_word_count: " . str_word_count($exampleString) . '<br>'; // number of words in string
echo " strrev: " . strrev($exampleString) . '<br>'; // reverses string
echo " strtoupper: " . strtoupper($exampleString) . '<br>'; // all characters to uppercase
echo " strtolower: " . strtolower($exampleString) . '<br>'; // all characters to lowercase
echo " ucfirst: " . ucfirst('hello') . '<br>'; // change first character to uppercase
echo " lcfirst: " . lcfirst('HELLO') . '<br>'; // change first character to lowercase
echo " ucwords: " . ucwords('hello world') . '<br>'; // changes first character of words to uppercase
echo " strpos: " . strpos($exampleString, 'world') . '<br>'; // finds position of selected word;  case sensitive; includes whitespace;
echo " stripos: " . stripos($exampleString, 'world') . '<br>'; // finds position of selected word;  case insensitive; includes whitespace;
echo " substr: " . substr($exampleString, 8) . '<br>'; // returns substring starting at selected position; optional 3rd argument to say how many characters to grab
echo " str_replace: " . str_replace('world', 'PHP', $exampleString) . '<br>'; // case sensitive
echo " str_ireplace: " . str_ireplace('world', 'PHP', $exampleString) . '<br>'; // case insensitive



// Multiline text and line breaks
$longText = "
Hello, my name is Todd. 
This is the PHP Crash Course,
and so far so good.
";

echo $longText . '<br>'; // displays all on same line in browser
echo nl2br($longText) . '<br>'; // adds <br> tags whenever it finds a new line


// Multiline text and reserve html tags
$longText = "
Hello, my name is <b>Todd</b>. 
This is the <b>PHP Crash Course</b>,
and so far so good.
";

echo "just echoed: " . $longText . '<br>'; // displays all on same line in browser
echo "nl2br: " . nl2br($longText) . '<br>'; // follows formatting in original string
echo "htmlentities: " . htmlentities($longText) . '<br>'; // displays html tags in string
echo "nl&br and htmlentities: " . nl2br(htmlentities($longText)) . '<br>'; // displays html tags and keeps formatting



// https://www.php.net/manual/en/ref.strings.php
