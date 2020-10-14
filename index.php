<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai) {
    if ($grizai_isgeres) {
        $answer = 'Grįžai vėlai ir išgėręs';
    } else {
        $answer = 'Grįžai vėlai';
    }

} else {
    if ($grizai_velai) {
        $answer = 'Nieko nepadarei';
    } else {
        $answer = 'Grįžai isgeres';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
</head>
<body>
<h1>Buitinė skaičiuoklė</h1>
<h2>
    Situacija: <?php print $answer; ?>
</h2>
</body>
</html>

