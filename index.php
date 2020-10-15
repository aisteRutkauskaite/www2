<?php
$date = date('Y-m-d', strtotime('+1 day'));
$day = date('l', strtotime('+1 day'));

$breakfast1 = 3.4;
$breakfast2 = 2.5;
$breakfast3 = 3;

$lunch1 = 5.7;
$lunch2 = 7;
$lunch3= 4;

$dinner1 = 9;
$dinner2= 8.7;
$dinner3 = 5;


$random1 = rand(1, 3);
$random2 = rand(1, 3);
$random3 = rand(1, 3);

$total_sum = 0;

if($random1 === 1){
    $price1 = $breakfast1;
    $total_sum += $breakfast1;
} elseif ($random1 === 2) {
    $price1 = $breakfast2;
    $total_sum+= $breakfast2;
} else {
    $price1 = $breakfast3;
    $total_sum += $breakfast3;
}

if($random2 === 1){
    $price2 = $lunch1;
    $total_sum += $lunch1;
} elseif ($random2 === 2) {
    $price2 = $lunch2;
    $total_sum += $lunch2;
} else {
    $price2 = $lunch3;
    $total_sum += $lunch3;
}

if($random3 === 1){
    $price3 = $dinner1;
    $total_sum += $dinner1;
} elseif ($random3 === 2) {
    $price3 = $dinner2;
    $total_sum += $dinner2;
} else {
    $price3 = $dinner3;
    $total_sum+= $dinner3;
}


//$total_price = $total1 + $total2 + $total3;
$min_price_breakfast = min()

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
        h3{
            color: green;
        }
    </style>

</head>
<body>

<h1> <?php print $date; ?></h1>
<h3> <?php print $day; ?></h3>

<section class="container">
    <h2>Breakfast</h2>
    <div class="img breakfast<?php print $random1; ?>"></div>
    <h4>Breakfest price:<?php print  $price1; ?> </h4>
    <?php  if($random1 === 2): ?>
    <h3>Lowest price</h3>
    <?php  endif ; ?>
</section>

<section class="container">
    <h2>Lunch</h2>
    <div class="img lunch<?php print $random2; ?>"></div>
    <h4>Lunch price:<?php print $price2; ?> </h4>
    <?php  if($random2 === 3): ?>
        <h3>Lowest price</h3>
    <?php  endif ; ?>
</section>

<section class="container">
    <h2>Dinner</h2>
    <div class="img dinner<?php print $random3; ?>"></div>
    <h4>Dinner price:<?php print  $price3 ; ?> </h4>
    <?php  if($random3 === 3): ?>
        <h3>Lowest price</h3>
    <?php  endif ; ?>
</section>

<h2>Total price:<?php print $total_sum; ?> </h2>

</body>
</html>

