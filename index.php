<?php
$hours = 12;
$ticket_price = 13;
$money_earned = 0;
$total_people = 0;
$total_people_exit = 0;
$carousel_spin = 0;

for ($x = 0; $x < $hours; $x++) {
    $visitors = rand(1, 20);
    if ($visitors < 10) {
        $total_people_exit += $visitors;
    } else {
        $total_people_exit += $visitors - 10;
        $carousel_spin++;
        $total_people += 10;
    }
}

$money_earned += $ticket_price * $total_people;

$h2 = "karusėlė uždirbo $money_earned eur";
$h3 = "Žmonių prasisuko: $total_people";
$h4 = "Žmonių išėjo: $total_people_exit";
$h5 = "Karuselė sukosi $carousel_spin kartu";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
</head>
<body>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
<h4><?php print $h4; ?></h4>
<h5><?php print $h5; ?></h5>
</body>
</html>


​
