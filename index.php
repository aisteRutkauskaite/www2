<?php
$answer = '';

if (isset($_POST['day'])) {
    $date = date('w');
    switch ($date) {
        case 0:
            $answer = "Sekmadienis";
            break;
        case 1:
            $answer = "Pirmadienis";
            break;
        case 2:
            $answer = "Antradienis";
            break;
        case 3:
            $answer = "Treciadienis";
            break;
        case 4:
            $answer = "Ketvirtadienis";
            break;
        case 5:
            $answer = "Penktadienis";
            break;
        case 6:
            $answer = "Šeštadienis";
            break;

    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>
<form method="post">
    <button name="day" type="submit">Spausdinti dieną</button>
</form>
<h1><?php print $answer; ?></h1>
</body>
</html>


​
