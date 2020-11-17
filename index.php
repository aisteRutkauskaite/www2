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
        <a href="contact.php">Contact us</a>
    </nav>
</header>
<main>
    <section class="post">
        <h1 class="post_title">BASKETBALL TOURNAMENT</h1>
        <p class="post_text">Tournament for shitty players</p>
        <article class="team">
            <div class="team_container">
                <h2 class="team_name"><?php print $team_one['team_name']; ?></h2>
                <img class="team_image" src="<?php print $team_one['team_logo']; ?>" alt="">
                <h3 class="coach">Coach: <?php print $team_one['coach_name']; ?></h3>
            </div>
            <span class="vs">VS</span>
            <div class="team_container">
                <h2 class="team_name"><?php print $team_two['team_name']; ?></h2>
                <img class="team_image" src="<?php print $team_two['team_logo']; ?>" alt="">
                <h3 class="coach">Coach: <?php print $team_two['coach_name']; ?></h3>
            </div>
        </article>
        <article class="date_container">
            <div class="date_container_info">
                <h2 class="date_container-tittle">GAME ON:</h2>
                <div class="date_container-information">
                    <h2 class="date_container_date"><?php print $game['date']; ?>  </h2>
                    <h2 class="date_container_time"><?php print ' | ' . $game['time']; ?>  </h2>
                    <h2 class="date_container_location"><?php print ' | ' . $game['location']; ?></h2>
                </div>
                <?php if (teams_scores($game['result'] !== 0)): ?>
                    <h3 class="date_container_result"><?php print  $game['result']; ?></h3>
                <?php endif; ?>
            </div>
        </article>
    </section>
</main>
<footer>
    <p>All rights reserved for Aistukas</p>
</footer>
</body>
</html>
