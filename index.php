<?php
$name_one = ['Aiste'];
$name_two = ['Aiste', 'Sigis'];
$name_three = ['Aiste', 'Sigis', 'Agne'];
$name_four = ['Aiste', 'Sigis', 'Agne', 'Minde'];


function people_likes_this($array) {
    $answer ='';
    $length = count($array);
    var_dump($length);
    switch ($length) {
        case 0:
            $answer = 'Empty array';
            break;
        case 1:
            $answer = $array[0] . 'likes this';
            break;
        case 2:
            $answer = $array[0] . 'and' . $array[1] . 'likes this';
            break;
        case 3:
            $answer =  $array[0] . ',' . $array[1] . ',' . $array[2] .'likes this' ;
            break;
        case 4:
            $answer = $array[3];
            break;
    }
    return $answer;
};
var_dump(people_likes_this($name_two));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Something</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Nova+Square&display=swap"
          rel="stylesheet">
</head>
<body>
</body>
</html>
