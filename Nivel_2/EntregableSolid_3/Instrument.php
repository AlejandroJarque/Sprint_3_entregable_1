<?php

require_once 'Interficie.php';

abstract class Instrument implements ToPlay{

    abstract public function toPlay(): void;
    
}
?>