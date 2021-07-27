<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data.
$resourse = curl_init($url);
// curl_setopt($resourse, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resourse);
// // Get response status code
// $code= curl_getinfo($resourse, CURLINFO_HTTP_CODE);

// echo '<pre>';
// var_dump($code);
// echo '</pre>';

// curl_close($resourse);

// echo $result;


// set_opt_array
// Post request
$user = [
  'name' => 'Jimbo McLean',
  'username' => 'jimbo',
  'email' => 'jimbo@example.com'
];

$resource = curl_init();

curl_setopt_array($resourse, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => ['content-type: application/json'],
  CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resourse);
curl_close($resourse);
echo $result; 
