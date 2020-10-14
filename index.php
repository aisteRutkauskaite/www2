<?php
$card_one_player_one = rand(1, 11);
$card_two_player_one = rand(1, 11);
$player_one = $card_one_player_one + $card_two_player_one;

$card_one_player_two = rand(1, 11);
$card_two_player_two = rand(1, 11);
$player_two = $card_one_player_two + $card_two_player_two;

if ($player_one > $player_two) {
    $answer = "Player one win $player_one";
} else if ($player_one < $player_two) {
    $answer = "Player two win $player_two";
} else {
    $answer = "Equal";
}
?>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .block {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .cards {
        display: flex;

    }

    .card {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 200px;
        height: 200px;
        border: 1px solid red;
        margin: 20px;
    }

    section {
        display: flex;
        flex-direction: column;
    }
</style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> variables </title>
</head>
<body>
<h1>Winner: <?php print $answer; ?></h1>
<section>
    <div class="block">
        <h3>Player one gets: <?php print $player_one; ?></h3>
        <div class="cards">
            <div class="card">
                <h4><?php print $card_one_player_one; ?></h4>
            </div>
            <div class="card">
                <h4><?php print $card_two_player_one; ?></h4>
            </div>
        </div>
    </div>
    <div class="block">
        <h3>Player two gets: <?php print $player_two; ?></h3>
        <div class="cards">
            <div class="card">
                <h4><?php print $card_one_player_two; ?></h4>
            </div>
            <div class="card">
                <h4><?php print $card_two_player_two; ?></h4>
            </div>
        </div>
    </div>
</section>
</body>
</html>

