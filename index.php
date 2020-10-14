<?php
$date = date('Y-m-d', strtotime('+1 day'));
$day = date('l', strtotime('+1 day'))
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

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .breakfast1 {
            background-image: url("food/breakfast1.jpg");
        }

        .breakfast2 {
            background-image: url("food/breakfast2.png");
        }

        .breakfast3 {
            background-image: url("food/breaksfast3.jpg");
        }

        .img {
            width: 300px;
            height: 300px;
            background-size: cover;
        }

        .lunch1 {
            background-image: url("food/lunch1.jpg");
        }

        .lunch2 {
            background-image: url("food/lunch2.png");
        }

        .lunch3 {
            background-image: url("food/lunch3.jpg");
        }

        .dinner1 {
            background-image: url("food/dinner1.jpg");
        }

        .dinner2 {
            background-image: url("food/dinner2.jpg");
        }

        .dinner3 {
            background-image: url("food/dinner3.jpg");
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

</head>
<body>

<h1> <?php print $date; ?></h1>
<h3> <?php print $day; ?></h3>
<section class="container">
    <h2>Breakfast</h2>
    <div class="img breakfast<?php print rand(1, 3); ?>"></div>
</section>
<section class="container">
    <h2>Lunch</h2>
    <div class="img lunch<?php print rand(1, 3); ?>"></div>
</section>
<section class="container">
    <h2>Dinner</h2>
    <div class="img dinner<?php print rand(1, 3); ?>"></div>
</section>

</body>
</html>

