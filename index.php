<?php
$answer = 'Pasirink kokį nors variantą';

if (isset($_POST['oras'])) {
    if ($_POST['oras'] == 'saule') {
        $answer = 'Šiandien šviečia saulė';
    }
    if ($_POST['oras'] == 'debesys') {
        $answer = 'Šiandien  debesuota';
    }
    if ($_POST['oras'] == 'sninga') {
        $answer = 'Šiandien  sninga';
        $value = 'sninga';}
    if ($_POST['oras'] == 'lyja') {
        $answer = 'Šiandien  smarkiai lyja';
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
    <label for="oras">Select the weather:</label>
    <select name="oras" id="cars" >
        <option value="saule">Šviečia saulė</option>
        <option value="debesys">Debesuota</option>
        <option value="sninga">Sninga :)</option>
        <option value="lyja">lyja lietus</option>
    </select>
    <button>Enter</button>
</form>
<h1><?php print $answer; ?></h1>
</body>
</html>


​
