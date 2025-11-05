<?php

require_once 'Instrument.php';

class Piano extends Instrument {

    public function toPlay(): void {

        echo "Playing the piano ;) \n";
    }
}
?>