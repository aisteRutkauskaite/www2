<?php
$random_num = rand(6, 15);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        body{
            display: flex;
            flex-wrap: wrap;
        }
        .container{
            width: 31vw;
            height: 250px;
            background-color: cadetblue;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php for($x = 0; $x < $random_num; $x++ ) :?>
<div class="container"></div>
<?php endfor; ?>
</body>
</html>


​
