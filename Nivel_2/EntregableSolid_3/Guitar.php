<?php

require_once 'Instrument.php';

class Guitar extends Instrument{

    public function toPlay(): void {

        echo "Strumming the guitar /,,/_ \n";
    }
}
?>