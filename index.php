<?php
$users = [
    [
        'email' => 'aiste@gmail',
        'password' => 'aiste'
    ],
    [
        'email' => 'sigis@gmail',
        'password' => 'sigis'
    ],
    [
        'email' => 'agne@gmail',
        'password' => 'agne'
    ]
];

$new_user = [
    'email' => '',
    'password' => ''
];

function validate_new_user(&$array, $email, $password)
{
    foreach ($array as $user) {
        if ($email === $user['email'] && $password === $user['password']) {
            return false;
        }
    }
    $new_user = [
        'email' => $email,
        'password' => $password
    ];
    $array[] = $new_user;
    var_dump($array);
    return true;
}

function passsword_match($password, $repaeated_password)
{
    if ($password === $repaeated_password) {
        return true;
    }
    return false;
}


var_dump($users);
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
<style>
    form {
        display: flex;
        flex-direction: column;
    }

    input, button {
        width: 200px;
    }
</style>
<body>
<form method="POST">
    <label for="email">El. Paštas</label>
    <input type="email" id="email" name="email" value="">
    <label for="password">Slaptažodis</label>
    <input type="password" id="password" name="password" value="">
    <label for="password_repeat">Pakartokite slaptažodi</label>
    <input type="password" id="password_repeat" name="password_repeat" value="">
    <button type="submit" name="login" value="submit">Prisijungti</button>
    ​
    <?php if (!empty($_POST)): ?>
        <?php if (passsword_match($_POST['password'], $_POST['password_repeat']) && validate_new_user($users, $_POST['email'], $_POST['password'])): ?>
            <div class="message">Sveikiname prisiregistravus <?php print $_POST['email']; ?></div>
        <?php else: ?>
            <div class="error">Vartotojas - <i><?php print $_POST['email']; ?></i>
                Toks vartotojas jau egzistuoja arba splatažodžiai nesutampa
            </div>
        <?php endif; ?>
    <?php endif; ?>
</form>
</body>
</html>
