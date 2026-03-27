<?php

trait greeting {
    function say_hello() {
        echo "Hello!";
    }

    function say_goodbye() {
        echo "Goodbye!";
    }
}

class Man {
    use greeting;
}

class Woman {
    use greeting;
}

$man = new Man();
$man->say_hello(); // Output: Hello!
$woman = new Woman();
$woman->say_goodbye(); // Output: Goodbye!
?>