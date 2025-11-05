<?php

require_once 'Instrument.php';

class Drums extends Instrument {

    public function toPlay(): void {

        echo "Beating the drums :)\n";
    }
}
?>