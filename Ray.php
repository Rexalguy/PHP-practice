<?php

// echo strlen("Hello World"); // Output: 13
$hey =  explode(" ","Hello World"); // Output: Array ( [0] => Hello [1] => World )
$yey = implode(" ",$hey); // Output: Hello World

echo $yey;

?>