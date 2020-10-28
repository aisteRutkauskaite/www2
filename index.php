<?php
$num = rand(-10, 10);
$num2 = rand(-10, 10);

function search_numb($number, $number2)
{
    var_dump($number, $number2);
    if (($number > 0 && $number2 > 0) || ($number < 0 && $number2 < 0) || ($number === 0 && $number2 === 0)) {
        return true;
    }
    return false;

}

var_dump(search_numb($num, $num2));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> functions </title>
</head>
<body>
</html>


​
