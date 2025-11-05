<?php

class Results {

    protected $score = [];

    public function saveCalification(Athletes $athletes, Events $events, string $medal) {

        $this -> score [] = [
            'athletes' => $athletes,
            'events' => $events,
            'medal' => $medal
        ];
    }

    public function getScore(): array {

        return $this -> score;
    }
}
?>