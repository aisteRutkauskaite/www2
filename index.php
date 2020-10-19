<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$katasuniai = 0;
$pregnant = true;

for ($k = 1 ; $k <= $kates; $k++) {
    for ($s = 1; $k <= $sunys; $s++) {
        if ($pavyko = rand(0, 1)) {
            $katasuniai++;
            break;
        }
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
    </style>
</head>
<body>

<h1>Katašunių išeiga</h1>
<h2>Dalyvavo <?php print $kates; ?> katės ir <?php print $sunys; ?> šunys </h2>
<h3>katašunių išeiga <?php print $katasuniai; ?></h3>


</div>
</body>
</html>


​
