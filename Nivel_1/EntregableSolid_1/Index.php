<?php

require 'OlympicGames.php';
require 'Athletes.php';
require 'Events.php';
require 'Results.php';

$my_OlympicGames = new OlympicGames();

$my_Athlete1 = new Athletes("Usain Bolt", "Jamaica");
$my_Athlete2 = new Athletes("Michael Phelps", "USA");

$my_Event1 = new Events("100m Sprint", "2024-08-01");
$my_Event2 = new Events("Swimming", "2024-08-02");

$my_Medal = "Gold";

$my_results1 = new Results();
$my_results2 = new Results();


$my_OlympicGames -> addAthletes($my_Athlete1, $my_Athlete2);
$my_OlympicGames -> addEvents($my_Event1, $my_Event2);
$my_OlympicGames -> addResults($my_results1, $my_results2);

$my_results1 -> saveCalification($my_Athlete1, $my_Event1, $my_Medal);
$my_results2 -> saveCalification($my_Athlete2, $my_Event2, $my_Medal);


$my_OlympicGames -> showInfo($my_results1);
$my_OlympicGames -> showInfo($my_results2);

?>