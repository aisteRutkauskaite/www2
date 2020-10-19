<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($m = 1 ; $m <= $months; $m++) {
    $month_expenses = rand(450, 1300);
    $wallet += $month_income -  $month_expenses;
    if( $wallet < 0){
         $h2 = "Atsargiai $m mėnesį gali baigtis pinigai ";
         break;
    }
    $h2 = "po $months m., prognuozuojamas likutis: $wallet Eur";
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
<h1>Wallet Forecast</h1>
<h2><?php  print $h2; ?> </h2>
</body>
</html>


​
