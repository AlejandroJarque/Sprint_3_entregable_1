<?php
class OlympicGames {

    private $athletes = [];
    private $events = [];
    private $results = [];

    public function addTo(array $list, object ...$items):void {

        foreach($items as $item) {

            $list [] = $item;
        }
    }

    public function addAthletes(Athletes ...$athletes): void {

        $this -> addTo($this -> athletes, ...$athletes);
    }

    public function addEvents(Events ...$events): void {

        $this -> addTo($this -> events, ...$events);
    }

    public function addResults(Results ...$results): void {

        $this -> addTo($this -> results, ...$results);
    }

    public function showInfo(Results $results): void {

        foreach($results -> getScore() as $entiti) {

            echo $entiti['athletes']. " - ".$entiti['events']. " - ". $entiti['medal']."\n";
        }
    }
}
?>