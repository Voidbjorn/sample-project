<?php

use Classes\Movierater;

require_once __DIR__ . "/../vendor/autoload.php";

$movierater = new Movierater();

var_dump($movierater->getStars('Titanic'));

