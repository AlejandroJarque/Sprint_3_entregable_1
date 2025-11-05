<?php

require_once 'Interfaces.php';

class ElectricHeater implements Powerable, Heat {

    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
}
?>