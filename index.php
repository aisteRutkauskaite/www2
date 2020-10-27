<?php
$numbers = '20.3k 3.8k 7.7k 992';
$numbers_array = explode(" ", $numbers);
$numbers_array2 = [];

foreach ($numbers_array as $index => $value) {
    $numbers_array2[] = intval(str_replace([".", "k"], ["", "00"],  $value));
}
var_dump($numbers_array2);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> arrays </title>
</head>
<body>
</html>


​
