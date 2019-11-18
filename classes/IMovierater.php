<?php


namespace Classes;

interface IMovierater
{
    public function getStars($movie): MovieRating;
}

class MovieRating {
    public $title;
    public $sound = 0;
    public $acting = 0;
    public $effects = 0;
    public $music = 0;
    public $total = 0;
}
