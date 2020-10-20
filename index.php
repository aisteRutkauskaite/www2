<?php
date_default_timezone_set('Europe/Vilnius');

$days = 365;
$pack_price = 3.50;
$count_total = 0;
$time_per_cig = 5;
$time_total = 0;
$Mon_friday_cigs = 0;


for ($i = 0; $i <= $days; $i++) {
    $weekday = (int)date("N", strtotime("+$i day"));
    if ($weekday <= 5) {
        $cigs_mon_fri = rand(3, 4);
        $count_total += $cigs_mon_fri;
        $Mon_friday_cigs += $cigs_mon_fri;
    } elseif ($weekday == 6) {
        $cigs_sat = rand(10, 20);
        $count_total += $cigs_sat;
    } else {
        $cigs_sun = rand(1, 3);
        $count_total += $cigs_sun;
    }
}
$count_packages = ceil($count_total / 20);
$time_total = floor($time_per_cig * $count_total / 60);
$price_total = $pack_price * ceil($count_total / 20);
$saved_money = ceil($Mon_friday_cigs / 20) * $pack_price;
$h2 = "Per $days dienas, surūkysiu $count_total cigarečių už $price_total eur";
$h3 = "Nerukydamas darbo dienomis sutaupyciau $saved_money eur";
$h4 = "Viso traudamas prastovesiu $time_total valandų";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <style>
        .img_cig {
            background-image: url("cigarete.jpg");
            width: 150px;
            height: 100px;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }
        .pack {
            border: 1px solid black;
            margin: 20px;
        }
    </style>
</head>
<body>
<h1> Mano dūmų skaičiuoklė</h1>
<h2><?php print $h2; ?> </h2>
<h3><?php print $h3; ?> </h3>
<h4><?php print $h4; ?> </h4>
<section class="container">
    <?php for ($a = 0; $a < $count_packages; $a++): ?>
        <div class="pack">
            <?php for ($x = 1; ($x <= 20 && $count_total); $x++, $count_total--): ?>
                <div class="img_cig"></div>
            <?php endfor; ?>
        </div>
    <?php endfor; ?>
</section>
</body>
</html>


​
