<?php

require 'ElectricHeater.php';
require 'WashingMachine.php';

$my_Heater = new ElectricHeater();
$my_WashingMachine = new WashingMachine();

$my_Heater -> turnOn();
$my_Heater -> heat();
$my_Heater -> turnOff();

$my_WashingMachine -> turnOn();
$my_WashingMachine -> wash();
$my_WashingMachine -> turnOff();
?>