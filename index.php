<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
$time = date('h:i:s');

$second = date('s');
$minute = date('i');
$hour = date('h');

$second_rotation = $second * 6 - 180;
$minute_rotation = $minute * 6 - 180;
$hour_rotation = $hour * 15 ;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0 auto;
        }

        .clock {
            background-image: url("https://i.dlpng.com/static/png/6810217_preview.png");
            width: 500px;
            height: 500px;
            background-size: cover;
            position: relative;
        }

        .hours_arrow {
            border: 5px solid black;
            height: 200px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform-origin: top left;
            transform: rotate(<?php print $hour_rotation; ?>deg);
        }

        .minutes_arrow {
            border: 3px solid green;
            height: 150px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform-origin: top left;
            transform: rotate(<?php print $minute_rotation; ?>deg);
        }

        .seconds_arrow {
            border: 1px solid red;
            height: 100px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform-origin: top left;
            transform: rotate(<?php print $second_rotation; ?>deg);
        }
        .clock_arrow{
            right:0;
            bottom: 0;
        }

    </style>
</head>
<body>
<h1><?php print $time; ?></h1>
<div class="clock">
    <div class="hours_arrow" ></div>
    <div class="minutes_arrow " ></div>
    <div class="seconds_arrow " ></div>
</div>
</body>
</html>


​
