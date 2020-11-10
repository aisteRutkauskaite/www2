<?php
$words = 'Labai ilgas sakinys APIE nieka';

//function remove_vowels($words) {
//    $vowels = array("a", "e", "i", "o", "u");
//    $words = str_ireplace($vowels, "", $words);
//}

function remove_vowels(&$words) {
    $vowels = array("a", "e", "i", "o", "u");
    $words = str_ireplace($vowels, "", $words);
}

remove_vowels($words);


var_dump($words);
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
