<?php
$tree = rand(10, 30);
$stem = rand(1, 4);

for ($x = 1; $x <= $tree; $x++) {
    for ($y = 1; $y <= $x; $y++) {
        $decorations_rand = rand(1, 30);
        if ($decorations_rand == 1) {
            print '💚';
        } elseif ($decorations_rand == 2) {
            print '💗';
        } elseif ($decorations_rand == 3) {
            print '💙';
        } else {
            print '*/*';
        }
    }
    print '</br>';
}

for ($i = 1; $i <= $stem; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        print '**';
    }
    print '</br>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
</head>
<body>
</body>
</html>


​
