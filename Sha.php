<?php

$word = "Hello Manuel";

$position = strpos($word, "Manuel");

$substring = substr($word, $position);

$newWord = str_replace($substring, "Shamma", $word);

echo $newWord;

?>