<?php
$triangle = rand( 5,10);

for ($w = 1; $w <= $triangle; $w++) {
    for ($h = 1; $h <= $w; $h++){
        print "*";
    }
    print "<br />";
}

for ($i = $triangle ; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++){
        print "*";
    }
    print "<br />";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>

    <style>
    </style>
</head>
<body>
</body>
</html>


​
