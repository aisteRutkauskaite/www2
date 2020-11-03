<?php
$answer = '';

if (isset($_POST['button'])) {
    square($answer);
}

function square(&$answer) {
    if (isset($_POST['number'])) {
        if (is_numeric($_POST['number'])) {
            $answer = $_POST['number'] * $_POST['number'];
        } else {
            $answer = 'Please enter correct number';
        }
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
<form action="" method="post">
    <input type="text" placeholder="number" name="number">
    <button type="submit" name="button">Submit</button>
</form>
<h2><?php print $answer; ?></h2>
</body>
</html>


​
