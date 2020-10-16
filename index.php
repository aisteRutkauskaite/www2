<?php
//$seconds = rand(0, 100000);
// $string = gmdate('H:i:s' ,$seconds);

$init = rand(0, 100000);
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;

$result= "$hours:$minutes:$seconds";

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

<!--    <h1>--><?php //print $seconds ?><!-- </h1>-->
<!--    <h1>--><?php //print $string ?><!-- </h1>-->
    <h1><?php print $init ?> </h1>
    <h1><?php print $result ?> </h1>
</div>
</body>
</html>


​
