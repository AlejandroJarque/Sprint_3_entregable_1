<?php

require 'Guitar.php';
require 'Drums.php';
require 'Piano.php';
require 'Other.php';


$instruments = [
    new Guitar(),
    new Drums(),
    new Piano(),
    new Other()
];

foreach($instruments as $instrument) {

    echo $instrument -> toPlay();
}
?>