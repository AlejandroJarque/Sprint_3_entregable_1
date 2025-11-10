<?php

function addTo(array $list, object ...$items):void {

    foreach($items as $item) {

        $list [] = $item;
    }
}

?>