<?php
$user_data = [];

$thanks = "Dėkojame už jūsų pateiktą informaciją";

if (isset($_POST['button'])) {
    if (!validate_field_not_empty($_POST['text'])) {
        $error = 'Palikote tuščią žinutės laukelį';
    } else {
        $user_data['name'] = 'Vardas: ' . $_POST['name'];
        $user_data['email'] = 'El. paštas: ' . $_POST['email'];
        $user_data['$telephone'] = 'Telefono numeris: ' . $_POST['tel'];
        if ($_POST['pardavimai'] == 'Pardavimai') {
            $user_data['radio'] = 'Skirta: Pardavymų skyriui';
        } elseif ($_POST['pardavimai'] == 'Administracija') {
            $user_data['radio'] = 'Skirta: Administracijai';
        } else {
            $user_data['radio'] = 'Skirta: Klientų aptarnavimas';
        }
        if (isset($_POST['theme'])) {
            if ($_POST['theme'] === 1) {
                $user_data['$theme'] = ' Tema: Skundas';
            } else {
                $user_data['$theme'] = 'Tema: Pasiulymas';
            }
            $user_data['$message'] = 'Žinutė: ' . $_POST['text'];
        }
    }
}

function validate_field_not_empty($field_value)
{
    if ($field_value == '') {
        return false;
    }
    return true;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<style>
    body {
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 20%;
    }

    input {
        width: 100%;
    }

    label {
        text-align: center;
    }

    .span {
        font-weight: bold;
        font-size: 25px;
        text-align: center;
    }

    .container {
        display: flex;
        flex-direction: column;
        text-align: center;
    }
</style>
<body>
<form method="post">
    <input type="text" name="name" value="" placeholder="Your name" required>
    <input type="email" name="email" value="" placeholder="Your email" required>
    <input type="tel" name="tel" value="" placeholder="Your telephone">

    <span class="span"> Noriu susisiekti su: </span>
    <input type="radio" id="pardavimai" name="pardavimai" value="Pardavimų skryrius" required>
    <label for="pardavimai">Pardavimų skryrius</label>
    <input type="radio" id="administracija" name="pardavimai" value="">
    <label for="administracija">Administracija</label>
    <input type="radio" id="klientai" name="pardavimai" value="">
    <label for="klientai">Klientų aptarnavimo skyrius</label>

    <select name="theme" id="theme">
        <option disabled selected value>Select an option</option>
        <option value="Pardavimai">Pardavimai</option>
        <option value="Prekes">Prekes</option>
    </select>

    <textarea id="text" name="text" rows="4" cols="50" placeholder="Jūsų žinutė"></textarea>
    <button name="button" type="submit">Siųsti</button>
    <article class="container">
        <h3>Dėkojame už jūsų žinutę, <?php print $_POST['name']; ?></h3>
        <?php foreach ($user_data as $user_info): ?>
            <p><?php print $user_info; ?></p>
        <?php endforeach; ?>
    </article>
</form>
</body>
</html>


​
