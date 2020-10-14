<?php
$distance = rand(1, 2000); //km
$consumption = 7.5; //1 / 100km
$price_1 = 1.3; // EUR / 1
$my_money = 100; // EUR

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;

if ($my_money >= $price_trip) {
    $trip_available = "Iperkama";
} else {
    $trip_available = "Neiperkama";
}

$total_money = number_format($price_trip, 2);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
</head>
<body>
<h1>Kelionės skaičiuoklė</h1>
<ul>
    <li>Nuvažiuota distancija:<?php print $distance; ?></li>
    <li>Sunaudota:<?php print $fuel_total; ?> l. kuro</li>
    <li>Kaina:<?php print $total_money; ?> pinigų</li>
    <li>Turimi pinigai:<?php print $my_money; ?> </li>
</ul>
<hr>
<p>
    Išvada: Kelionė: <?php print $trip_available; ?>
</p>

</body>
</html>

