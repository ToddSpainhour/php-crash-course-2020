<?php

// Print current date
echo date('Y-m-d H:i:s') . '<br>';



// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>'; // seconds in a minute * minutes in an hour * hours in a day = seconds in a day



// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';



// Print current timestamp
echo time() . '<br>'; // number of seconds since 01 Jan 1970



// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-22 09:00:00');
echo '<br>';
var_dump($parsedDate);
echo '</br>';



// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'March 4 2022 12:45:35';

$anotherParsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<br>';
var_dump($anotherParsedDate);
echo '</br>';
