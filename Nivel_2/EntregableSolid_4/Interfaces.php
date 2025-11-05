<?php

interface Powerable {

    public function turnOn(): void;
    public function turnOff(): void;
}


interface Heat{

    public function heat(): void;
}


interface Cool {

    public function cool(): void;
}
    
    
interface Wash {

    public function wash(): void;
}

?>