<?php
require './data/constantos.php';

function rand_array_value($array)
{
    return $array[rand(0, count($array) - 1)];
}

//var_dump(rand_array_value(NAMES));

function generate_random_player()
{
    return [
        'name' => rand_array_value(NAMES),
        'surname' => rand_array_value(SURNAMES),
        'age' => rand(18, 36),
        'height' => rand(175, 230),
        'position' => rand_array_value(POSITION_TYPES),

    ];
}

//var_dump(generate_random_player());


function generate_team()
{
    $array = [];
    $array['coach_name'] = rand_array_value(NAMES) . ' ' . rand_array_value(SURNAMES);
    $array['team_logo'] = 'logos/img-' . rand(1, 120) . '.svg';
    $array['team_name'] = ucfirst(rand_array_value(TEAM_ADJECTIVES)) . ' ' . ucfirst(rand_array_value(TEAM_NOUNS));
    for ($x = 0; $x < rand(7, 12); $x++) {
        $array['players'][] = generate_random_player();
    }
    foreach ($array['players'] as &$players) {
        $players['shirt_number'] = generate_rand_num_array(count($array['players']));
    }
    return $array;
}

//var_dump(generate_team());
$team_one = generate_team();
$team_two = generate_team();

function generate_rand_num_array($count)
{
    $numbers = range(1, 100);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

//var_dump(generate_rand_num_array(10));

function generate_rand_date($start_date, $end_date)
{
    $time = rand(strtotime($start_date), strtotime($end_date));
    return date("Y-m-d", $time);
}
//
//var_dump(generate_rand_date('2020-10-25', '2021-10-25'));

function generate_rand_time()
{
    $time = rand(strtotime('18:00'), strtotime('22:30'));
    return date('H:i', ceil($time / (30 * 60)) * (30 * 60));
}
//
//var_dump(generate_rand_time());

function generate_score()
{
    $score1 = rand(50, 160);
    $score2 = rand(50, 160);
    return $score1 . ':' . $score2;
}

//var_dump(generate_score());

function generate_match()
{
    $game = [
        'date' => generate_rand_date('2020-10-11', '2020-12-01'),
        'time' => generate_rand_time(),
        'location' => rand_array_value(CAPITALS),
        'team' => [],
        'result' => generate_score()
    ];
    for ($i = 0; $i < 2; $i++) {
        $match['team'][] = generate_team();
    }
    if ($game['date'] > date('Y-m-d')) {
        $game['result'] = '';
    }
    return $game;
}


//var_dump(generate_match());
$game = generate_match();

function teams_scores($result)
{
    $scores = [];
    if (!$result == '') {
        $scores['team1_score'] = substr($result, 0, strrpos($result, ":"));
        $scores['team2_score'] = substr($result, strrpos($result, ":") + 1);
    } else {
        $scores['team1_score'] = 0;
        $scores['team2_score'] = 0;
    }
    return $scores;
}

//var_dump(teams_scores($game['result']));
