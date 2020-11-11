<?php
$user_inputs = [
    ["catr", "blue", "skt", "umbrells", "paddy"],
    ["it", "is", "find"],
    ["aprinl", "showrs", "bring", "may", "flowers"],
    ['weird', 'indicr', 'moment', 'starry', 'wind', 'skies'],
];
$correct_texts = [
    ["cat", "blue", "sky", "umbrella", "paddy"],
    ["it", "is", "fine"],
    ["april", "showers", "bring", "may", "flowers"],
    ['weird', 'indict', 'moment', 'starry', 'wind', 'skies'],
];

function check_typing($user_inputs, $correct_texts) {
$array = [];
$length = count($user_inputs);
for ($x = 0; $x < $length; $x++) {
    if ($user_inputs[$x] === $correct_texts[$x]) {
        $array[] = 1;
    } else {
        $array[] = -1;
    }
}
return $array;
}

var_dump(check_typing($user_inputs[1],$correct_texts[1]));

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
