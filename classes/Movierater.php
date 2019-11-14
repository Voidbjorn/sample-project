<?php


namespace Classes;


class Movierater
{
    public function getStars($movie): array
    {
        return [
            "title" => "The Godfather",
            "sound" => 5,
            "acting" => 5,
            "effects" => 5,
            "music" => 4,
            "total" => 4
        ];
    }
}