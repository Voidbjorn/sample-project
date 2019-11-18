<?php


namespace Classes;


class Movierater implements IMovierater
{
    public function getStars($movie): MovieRating
    {
        ///
        /// This is a method stub!
        /// TODO: Implement this method and remove the code below:
        ///
        $movieRating = new MovieRating();
        $movieRating->title = $movie;
        return $movieRating;
    }
}
