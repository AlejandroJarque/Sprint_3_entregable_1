<?php

require_once 'Interfaces.php';

class WashingMachine implements Powerable, Wash {

    public function turnOn(): void
    {
        echo "Washing machine on\n";
    }

    public function turnOff(): void
    {
        echo "Washing machine off\n";
    }

    public function wash(): void
    {
        echo "Washing clothes\n";
    }
}
?>