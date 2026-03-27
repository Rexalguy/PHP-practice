<?php

abstract class Car {
    public $make;
    public $model;

    function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    abstract function get_info();
}


class Audi extends Car {
    function get_info() {
        echo "This is a German Audi.";
    }
}

class Tesla extends Car {
    function get_info() {
        echo "This is an American Tesla.";
    }
}

$audi = new Audi("Audi", "A4");
$audi->get_info();
$tesla = new Tesla("Tesla", "Model S");
$tesla->get_info();

?>