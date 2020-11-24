<?php
require 'functions/functions.php';
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
        <a href="statistics.php">Statistics</a>
        <a href="contact.php">Contact us</a>
    </nav>
</header>
<main class="main">
    <article class="teams">
        <div class="teams_container">
            <div class="teams_info">
                <span class="teams_tittle"><?php print 'Team:' . ' ' . $team_one['team_name']; ?></span>
                <h3 class="teams_coach"><?php print'Coach' . ' ' . $team_one['coach_name']; ?></h3>
                <img class="teams_coach_img"
                     src="https://assets.stickpng.com/images/5c5d8ac8e4b8dd029ff25a20.png" alt="coach">
                <span class="teams_players_tittle">Players:</span>
                <?php foreach ($team_one['players'] as $key => $player): ?>
                    <p class="teams_players_list"><?php print  $player['name'] . ' ' . $player['surname'] . ', '; ?></p>
                    <p class="teams_players_specification"><?php print 'AGE: ' . $player['age'] . ' | ' . ' HEIGHT: ' . $player['height'] . ' | ' . ' POSITION: ' . $player['position']; ?></p>
                    <p class="teams_players_specification"><?php print 'SHIRT NUMBER: ' . $player['shirt_number'][$key]; ?></p>
                <?php endforeach; ?>
            </div>
            <div class="teams_info">
                <span class="teams_tittle"><?php print 'Team:' . ' ' . $team_two['team_name']; ?></span>
                <h3 class="teams_coach"><?php print'Coach' . ' ' . $team_two['coach_name']; ?></h3>
                <img class="teams_coach_img"
                     src="https://isualumblog.files.wordpress.com/2015/09/coaching-clipart-images3.jpg" alt="coach">
                <span class="teams_players_tittle">Players:</span>
                <?php foreach ($team_two['players'] as $key => $player): ?>
                    <p class="teams_players_list"><?php print  $player['name'] . ' ' . $player['surname'] . ', '; ?></p>
                    <p class="teams_players_specification"><?php print 'AGE: ' . $player['age'] . ' | ' . ' HEIGHT: ' . $player['height'] . ' | ' . ' POSITION: ' . $player['position']; ?></p>
                    <p class="teams_players_specification"><?php print 'SHIRT NUMBER: ' . $player['shirt_number'][$key]; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </article>
</main>
<footer class="footer">
    <p>All rights reserved for Aistukas</p>
</footer>
</body>
</html>

