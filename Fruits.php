<?php

class Fruits {
    const NOTE = "Gives you Vitamins!";
    public $name;
    private $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_details()
    {
        print "The fruit is {$this->name} and its color is {$this->color}.";
    }

    function __destruct()
    {
        print "The fruit {$this->name} is being destroyed.";
    }

    protected function protected_method() {
        echo "This is a protected method.";
    }
}

$apple = new Fruits("Apple", "Red");
var_dump($apple instanceof Fruits); // true
$apple->get_details();

$banana = new Fruits("Banana", "Yellow");
$banana->get_details();

class Orange extends Fruits {
    public function message() {

        $this->protected_method(); // Accessing protected method from parent class
        echo "This is an orange and it is a child class of Fruits.";
    }
}

$orange = new Orange("Mangada", "Orange");
$orange->message();

echo Fruits::NOTE;


?>