<?php
$different_words = ['vejas', 'jura', 'saule', 'miskas', 'dangus', 'laja'];

//function find_four_letters ($words) {
//    $words_with_four_letters = [];
//    foreach ($words as $word) {
//        if (strlen($word)  === 4 ) {
//            $words_with_four_letters[] = $word;
//        }
//    }
//    return $words_with_four_letters;
//}
//
//$words_with_four_letters = find_four_letters($different_words);
//
//var_dump($words_with_four_letters);

function find_four_letters (&$words) {
    foreach ($words as $key => $word) {
        if (strlen($word)  !== 4 ) {
            array_splice($words, array_search($word,$words),1);
        }
    }
}

find_four_letters($different_words);


var_dump($different_words);

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
