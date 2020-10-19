<?php
for($a = 0; $a <= 9; $a++){
    for($b = 0; $b <= 9; $b++) {
        $number = "$a x $b =" . $a * $b;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <style>
        body{
            display: flex;
        }
        table{
            border: 1px solid black;
            width: 10%;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php for($i = 1 ; $i <= 9; $i ++ ): ?>
<table>
    <td>
    <?php for($x = 1 ; $x <= 9; $x ++ ):

       print "$x x $i = " . $x * $i . "<br />"; ?>

    <?php endfor; ?>
    </td>
</table>
<?php endfor; ?>

</body>
</html>


​
