<?php

function generate_array($length, $min, $max)
{
    $generated_array = [];
    for ($x = 1; $x <= $length; $x++) {
        $generated_array[] = rand($min, $max);
    }
    return $generated_array;
}

$my_array = generate_array(rand(2, 6), 2, 8);
var_dump($my_array);

function multiply_by_length($array)
{
    $result = [];
    $length = count($array);
    foreach ($array as $value) {
        $result[] = (int)$value * $length;
    }
    return $result;
}

$new_array = multiply_by_length($my_array);
var_dump($new_array);

//function multiply_by_length(&$array)
//{
//    foreach ($array as &$value) {
//        $value *= count($array);
//    }
//
//}
//
//multiply_by_length($my_array);
//var_dump($my_array);

//function partition($array) {
//    $new_array = [];
//    $even = [];
//    $odd = [];
//    foreach ($array as $value) {
//        if ($value % 2 == 0) {
//            $even[] = $value;
//            var_dump($even);
//        } else {
//            $odd[] = $value;
//            var_dump($odd);
//        }
//    }
//    $new_array[] = $even;
//    $new_array[] = $odd;
//    return $new_array;
//}
//
//$even_odd_array = partition($my_array);
//var_dump($even_odd_array);

function partition_rel(&$array) {
    $even = [];
    $odd = [];
    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $even[] = $value;
            var_dump($even);
        } else {
            $odd[] = $value;
            var_dump($odd);
        }
    }
    $array = ['evens' => $even, 'odds' => $odd];
}

partition_rel($my_array);
var_dump($my_array);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Something</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Nova+Square&display=swap"
          rel="stylesheet">
</head>
<body>
</body>
</html>
