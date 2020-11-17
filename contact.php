<?php
require 'functions/functions.php';
$text = '';
if (!empty($_POST)) {
    $text = 'Sveikiname prisijungus!';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Something</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Mitr:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Teams</a>
        <a href="contact.php">Contact us</a>
    </nav>
</header>
<main>
    <form action="" method="post">
        <h2 class="form_tittle">Contact us:</h2>
        <label for="name">Įveskite savo vardą</label>
        <input type="text" name="name" placeholder="Vardas">
        <label for="email">Įveskite savo el. paštą</label>
        <input type="email" name="email" placeholder="@mail.com">
        <label for="message">Įveskite savo el. paštą</label>
        <textarea name="message" id="message" placeholder="Jūsų žinutė"></textarea>
        <button type="submit" name="submit">Išsiųsti</button>
        <span class="form_greeting"><?php print $text; ?></span>
    </form>
</main>
<footer class="footer">
    <p>All rights reserved for Aistukas</p>
</footer>
</body>
</html>
