<?php
class OlympicGames {

    private $athletes = [];
    private $events = [];
    private $results = [];

    public function __construct(array $athletes, array $events, array $results) {

        $this -> athletes = $athletes;
        $this -> events = $events;
        $this -> results = $results;
    }

    public function showInfo(Results $results): void {

        foreach($results -> getScore() as $entiti) {

            echo $entiti['athletes']. " - ".$entiti['events']. " - ". $entiti['medal']."\n";
        }
    }
}
?>