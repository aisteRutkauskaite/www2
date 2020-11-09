<?php
$numbers = [];
for ($x = 0; $x < 5 ;$x++) {
    $numbers[] = rand(-100, 100);
}

var_dump($numbers);

function find_second_biggest_number($array) {
    rsort($array);
    return $array[1];
}

var_dump(find_second_biggest_number($numbers));

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
<style>

</style>
<body>

</body>
</html>
