<?php
var_dump(PHP_VERSION);

function mb_split($pattern, static::replace(['-', '_'], ' ', $value)) {

}

$value = "test_de_mots";

$words = mb_split('\s+', static::replace(['-', '_'], ' ', $value));
var_dump($words);
?>