<?php date_default_timezone_set('Europe/Vilnius'); ?>
<?php
//$time = date('h:i:s');
//
//$minute =  date('i:s') ;
//
//$reverse_minutes = abs(date(i) - 59);
//$minutes_remaining = $reverse_minutes % 5;
//$seconds_remaining = abs(date('s') - 59);
//$timer_plus = date('s');
//$timer_minus = 59 - date('s');
//
$joint_timer = 300 - (date('i') % 5 * 60 + date('s'));

$joint_minutes = ($joint_timer - $joint_timer % 60) / 60;
if ($joint_timer % 60 >= 10 ) {
    $joint_seconds = $joint_timer % 60;
} else {
    $joint_seconds = '0' . $joint_timer % 60;
}
​
$joint_percent = date('i') % 5 * 20 + 20 * date('s') / 60;
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
        .joint{
            background-image: url("joint/image.png");
           width: 300px;
            height: 300px;
            background-size: cover;
            position: relative;

        }
        .joint_color{
            background-image: url("joint/image.color.jpg");
            width: <?php print $joint_minutes  ; ?>px;
            height: 300px;
            background-size: cover;
            position: absolute;
            left: 42%;
            top: 4%;
        }




    </style>
</head>
<body>

<div class="">
    <div class="joint" ></div>
    <div class="joint_color" ></div>
    <h2><?php print  $joint_seconds; ?></h2>
</div>
</body>
</html>


​
