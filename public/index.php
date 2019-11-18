<?php

use Classes\Movierater;

require_once __DIR__ . "/../vendor/autoload.php";

$movierater = new Movierater();

$movie = $movierater->getStars('Titanic');

echo $movie->title . "\t";
echo $movie->acting . "\t";
echo $movie->effects . "\t";
echo $movie->music . "\t";
echo $movie->sound . "\t";
echo $movie->total;
echo PHP_EOL;
