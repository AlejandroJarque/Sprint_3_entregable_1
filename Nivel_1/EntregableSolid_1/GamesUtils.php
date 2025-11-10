<?php

function addTo(array $list, object ...$items):void {

    foreach($items as $item) {

        $list [] = $item;
    }
}

  /*public function addEvents(Events ...$events): void {

        addTo($this -> events, ...$events);
    }

    
    public function addResults(Results ...$results): void {

        addTo($this -> results, ...$results);
    }*/
?>