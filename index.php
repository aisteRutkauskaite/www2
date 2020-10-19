<?php



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <style>
        body {
            display: flex;
        }

        table {
            border: 1px solid black;
            width: 10%;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 9; $i++): ?>
    <table>

        <?php for ($x = 1; $x <= 9; $x++): ?>
            <tr>
                <td><?php print $x?></td>
                <td>*</td>
                <td><?php print $i; ?></td>
                <td>=</td>
                <td><?= $x * $i; ?></td>
            </tr>
        <?php endfor; ?>

    </table>
<?php endfor; ?>

</body>
</html>


​
