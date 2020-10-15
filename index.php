<?php
$rainy = rand(0, 1);
$sunny = rand(0, 1);
$class = '';

if ($rainy) {
    if ($sunny) {
        $text = 'rainy with sun';
        $class = 'cloudy ';
    } else {
        $text = 'rainy';
        $class = 'rainy';
    }
} else {
    if ($sunny) {
        $text = 'very sunny';
        $class = 'very_sunny';
    } else {
        $text = 'sunny';
        $class = 'sunny';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Chilanka', cursive;
        }

        .sunny {
            background-image: url("https://cdn3.iconfinder.com/data/icons/photography-54/64/sunny-mode-camera-photography-512.png");
        }

        .cloudy {
            background-image: url("https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-cloudy-icon-png-image_450295.jpg");
        }

        .rainy {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSU6z5h3SW0QSZh90-IpIXbESstlr4XWr5cyg&usqp=CAU");
        }

        .very_sunny {
            background-image: url("https://img.pngio.com/-very-hot-weather-png-512_512.png");
        }

        .img {
            width: 300px;
            height: 200px;
            background-size: contain;
        }
    </style>
</head>
<body>
<div class="img <?php print $class; ?>">
    <h2><?php print $text; ?></h2>

</div>
</body>
</html>


​
