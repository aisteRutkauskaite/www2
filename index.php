<?php
$answer = 'Pateikite informacija';

if (isset($_POST['age'])) {
    if ((int)$_POST['age'] >= 18 && (int)$_POST['age'] <= 26 && $_POST['teistumas'] === 'neteistas') {
        $answer = 'Jūs esate šaukiama į kariuomenę';
    } else {
        $answer = 'Jūs nesate šaukiama į kariuomenę';
    }
} else {
    $answer = 'Įveskite amžių';
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
    <label for="age">Provide your age</label>
    <input type="number" name="age" required>
    <label for="teistas">Teistas</label>
    <input type="radio" id="teistas" name="teistumas" value="teistas">
    <label for="neteistas">Neteistas</label>
    <input type="radio" id="neteistas" name="teistumas" value="neteistas">
    <button>Send</button>
</form>
<h1><?php print $answer; ?></h1>
</body>
</html>


​
