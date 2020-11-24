<?php
require 'functions/functions.php';

//var_dump(generate_teams(4));
//$team = generate_team();
//$teams = generate_teams(7);
//var_dump($team);

//var_dump(all_teams_players_count($teams));
//var_dump(count_average_number($teams));
//var_dump( avg_players_per_team(generate_teams(4)));
//var_dump(filter_by_teams_player(8, $teams));
//var_dump(count_by_position('PG', $team));
//var_dump(array_by_position('PG', $team));
//var_dump(teams_by_position('PG', 2 , $teams));
//var_dump(specific_position_players('PG',  $teams));
//var_dump(array_from_positions($teams));
//var_dump(max_position_count($teams));
//var_dump(usort($team['players'], "team_players_by_height"));
//var_dump(generate_matches(4));
//var_dump(first_matched_happened(generate_matches(4)));
//var_dump(last_matched_happened(generate_matches(6)));
//var_dump(filter_matches(generate_matches(6)));
//var_dump(generate_team());
//var_dump(generate_match());
//$past_matches = filter_matches(generate_matches(6));
//var_dump($past_matches[0]);
//assign_points($past_matches[0]);
//var_dump($past_matches[0]['team'][0]['players']);
$teams = generate_teams(5);
//$player = one_team_player_count($teams);
$matches = generate_matches(5);
//var_dump($matches);
$match = generate_match();

$past_matches = filter_past_matches($matches);
var_dump($past_matches);
assign_points($past_matches[0]);
//var_dump($past_matches[0]['team'][0]['players']);

//var_dump(generate_scoreboard($past_matches[0]));
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
<main class="statistics_main">
    <section>
        <ul>
            <li><a href="#komandos">Komandos</a></li>
            <li><a href="#rungtynes">Rungtynes</a></li>
            <li><a href="#taskai">Tasku lenteles</a></li>
            <li><a href="#info">Bendra info</a></li>
        </ul>
    </section>
    <section>
        <div id='komandos'><a name='komandos'></a>
            <h2>Komandos</h2>

            <table class="table">
                <tr class="border">
                    <th class="border">Komandos pavadinimas</th>
                    <th class="border">Trenerio vardas</th>
                    <th class="border">Žaidėjų komandoje</th>
                    <th class="border">Žaidėjai</th>
                    <th class="border">Aukščiausio ūgis</th>
                </tr>

                <?php foreach ($teams as $key => $team): ?>
                    <tr>
                        <td class="border"><?php print $team['team_name']; ?></td>
                        <td class="border"><?php print $team['coach_name']; ?></td>
                        <td class="border"><?php print count($team['players']); ?></td>
                        <?php foreach ($team['players'] as $player): ?>
                            <td class="border column"><?php print $player['position'] . ' ,' . $player['name'] . ' ' . $player['surname']; ?></td>
                        <?php endforeach; ?>
                        <?php usort($team['players'], 'team_players_by_height'); ?>
                        <td class="border"><?php print end($team['players'])['height']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id='rungtynes'><a name='rungtynes'></a>
            <h2>Rungtynes</h2>
            <table class="table">
                <tr class="border">
                    <th class="border">1 Komandos pavadinimas</th>
                    <th class="border">2 Komandos pavadinimas</th>
                    <th class="border">Rezultatai</th>
                </tr>
                <?php foreach ($matches as  $match): ?>
                    <tr>
                        <td class="border"><?php print $match['team'][0]['team_name']; ?></td>
                        <td class="border"><?php print $match['team'][1]['team_name']; ?></td>
                        <?php if ($match['result'] === ''): ?>
                            <td class="border"><?php print $match['date']; ?></td>
                        <?php else: ?>
                            <td class="border"><?php print $match['result']; ?></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id='taskai'><a name='taskai'></a>
            <h2>Taškų lenteles</h2>
            <table class="table">
                <tr class="border">
                    <th class="border">Žaidžiančios komandos pavadinimas</th>
                    <th class="border">Rungtynių data</th>
                    <th class="border">Rezultatai</th>
                </tr>
                <?php foreach ($past_matches as $key => $match): ?>
                    <tr>
                        <td class="border"><?php print $match['team'][0]['team_name']; ?></td>

                        <td class="border"><?php print $match['team'][1]['team_name']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id='info'><a name='info'></a>
            <h2>Bendra info</h2>

        </div>
    </section>


</main>
<footer class="footer">
    <p>All rights reserved for Aistukas</p>
</footer>
</body>
</html>
