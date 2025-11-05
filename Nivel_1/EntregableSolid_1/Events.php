<?php

class Events {

    protected $event;
    protected $date;

    public function __construct(string $event, string $date) {

        $this -> event = $event;
        $this -> date = $date;
    }

    public function getEvent() {

        return $this -> event;
    }

    public function getDate() {

        return $this -> date;
    }

    public function __toString() {
        
        return "Event: ". $this -> event." (Date: ".$this -> date.")";
    }
}
?>