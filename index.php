<?php
$years = rand(1991, 2020);

if ($years % 400 === 0 || ($years % 4 === 0 && $years % 100 !== 0)) {
    $answer = 'keliamieji';
} else {
    $answer = 'nekeliamieji';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
    </style>
</head>
<body>

<div class="">

    <h1><?php print $years ?> yra:<?php print $answer ?> </h1>
</div>
</body>
</html>


​
