<?php
date_default_timezone_set('Europe/Vilnius');

$days = 365;
$pack_price = 3.50;
$count_total = 0;
$cigs_sat = rand(10, 20);
$cigs_sun = rand(1, 3);
$cigs_mon_fri = rand(3, 4);

for($i = 1 ; $i <= $days ; $i++) {
    $weekday = (int) date("N", strtotime("+$i day"));
    if($weekday <= 5){
        $count_total += $cigs_mon_fri ;
    } elseif ($weekday == 6) {
        $count_total +=  $cigs_sat;
    } else {
        $count_total +=  $cigs_sun;
    }

}
$price_total = $pack_price * ceil( $count_total / 20);
$h2 = "Per $days dienas, surūkysiu $count_total cigarečių už $price_total eur"

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
</head>
<body>
<h1> Mano dūmų skaičiuoklė</h1>
<h2><?php print $h2 ;?> </h2>
</body>
</html>


​
