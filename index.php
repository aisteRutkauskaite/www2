<?php
$name = 'Aistė';
$rand_age = rand(16, 27);
$teistumas = rand(0, 1);
$children = rand(1, 5);

if ($teistumas == true) {
    $text2 = 'teista';
} else {
    $text2 = 'neteista';
}

$reason_children = '';
$reason_conviction = '';
$reason_age = '';

if ($rand_age >= 18 && $rand_age <= 25 && $teistumas == true && $children <= 2  ) {
    $text = $name . ' yra šaukiama į kariuomenę ';
} else {
    $h1 = $name . ' nėra šaukiama į kariuomenę, nes';
    if ($children > 2) {
        $reason_children = ' turi ' . $children . ' vaikus';
    }
    if($teistumas) {
        $reason_conviction = ' yra ' . $text2;
    }
    if($rand_age < 18) {
        $reason_age = ' per jauna';
    }
    if ($rand_age > 25) {
        $reason_age =' per sena';
    }
    $text = $h1 . $reason_children . ',' . $reason_conviction . ',' .$reason_age;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
    </style>
</head>
<body>

<div class="">
    <ul>
        <li>Vardas:<?php print $name; ?></li>
        <li>Amžius: <?php print $rand_age; ?> </li>
        <li>Teistumas:<?php print $text2; ?> </li>
        <li>Vaikai:<?php print $children; ?> </li>
    </ul>
    <h1><?php print $text ; ?></h1>
</div>
</body>
</html>


​
