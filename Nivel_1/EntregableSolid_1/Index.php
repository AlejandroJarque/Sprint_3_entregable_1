<?php

require 'OlympicGames.php';
require 'Athletes.php';
require 'Events.php';
require 'Results.php';
require_once 'GamesUtils.php';

$my_Athlete1 = new Athletes("Usain Bolt", "Jamaica");
$my_Athlete2 = new Athletes("Michael Phelps", "USA");
$athletesList = [];
addTo($athletesList, $my_Athlete1, $my_Athlete2);

$my_Event1 = new Events("100m Sprint", "2024-08-01");
$my_Event2 = new Events("Swimming", "2024-08-02");
$eventsList = [];
addTo($eventsList, $my_Event1, $my_Event2);

$my_results1 = new Results();
$my_results2 = new Results();
$resultsList = [];
addTo($resultsList, $my_results1, $my_results2);

$my_Medal = "Gold";

$my_OlympicGames = new OlympicGames($athletesList, $eventsList, $resultsList);

$my_results1 -> saveCalification($my_Athlete1, $my_Event1, $my_Medal);
$my_results2 -> saveCalification($my_Athlete2, $my_Event2, $my_Medal);

$my_OlympicGames -> showInfo($my_results1);
$my_OlympicGames -> showInfo($my_results2);

?>