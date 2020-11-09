<?php
if (!empty($_POST)) {
    $amount = $_POST['amount'];
    $total_icons = 4;
    $icons = [];
    $won = true;
    for ($i = 1; $i <= $total_icons; ++$i) {
        $random_number = rand(1, 2);
        $icons[] = $random_number;
        if (count(array_unique($icons)) !== 1) {
            $won = false;
        }
    }

    if ($won) {
        $result = "Laimėjai " . number_format($total_icons * $amount, 2) . " Eur!";
    } else {
        $result = "Pralošei savo jobanus " . number_format($amount, 2) . " Eur!";
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&family=Nova+Square&display=swap"
          rel="stylesheet">
</head>
<style>
    body {
        padding-top: 50px;
        text-align: center;
    }
    .container {
        width: 600px;
        margin: auto;
        letter-spacing: 2px;
        padding: 10px;
    }
    .icons {
        padding: 30px 0;
        display: flex;
        justify-content: space-around;
    }
    .icon {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 100px;
        height: 100px;
    }
    .icon-1 {
        background-image: url("https://image.flaticon.com/icons/png/512/616/616408.png");
    }
    .icon-2 {
        background-image: url("https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/7460638491547545112-512.png");

</style>
<body>
<form method="post">
    <input type="number" name="amount" placeholder="Jūsų statoma suma" value="<?php ?>">
    <button type="submit">Žaisti</button>
</form>

<?php if (isset($amount)) : ?>
    <div>Žaidžiama iš: <?= $amount ?> Eur</div>
    <?php if (isset($icons)): ?>
        <div class="icons">
            <?php foreach ($icons as $icon): ?>
                <div class="icon icon-<?php print $icon ?>"></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div><?= $result ?></div>
<?php endif; ?>

</body>
</html>
