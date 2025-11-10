<?php


class Athletes {

    protected $name;
    protected $country;
 

    public function __construct(string $name, string $country) {

        $this -> name = $name;
        $this -> country = $country;
    }

    public function getName() {

        return $this -> name;
    }

    public function getCountry() {

        return $this -> country;
    }

    public function __toString(): string {
        
        return "Name: ". $this -> name." (Country: ". $this -> country.")";
    }
}

?>