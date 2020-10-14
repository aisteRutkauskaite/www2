<?php
$distance = rand(1, 500);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;
$format = number_format($price_trip, 2);
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
    <li>Kaina:<?php print $format; ?> pinigų</li>
</ul>
</body>
</html>

