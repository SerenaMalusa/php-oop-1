<?php

require_once __DIR__ . '/Genre.php';

class Production
{
    public $genres;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;

    function __construct(
        $genres,
        string $title,
        string $language,
        $vote = false
    ) {
        $this->set_genres($genres);
        $this->title = $title;
        $this->og_language = $language;
        $this->vote = $vote;
        $this->set_best_seller();
    }

    function set_genres($genres)
    {

        if (!is_array($genres) || empty($genres)) {
            throw new Exception("Every production must contain at least on genre, and they must be contained in an array.");
        }

        foreach ($genres as $genre) {
            if (!($genre instanceof Genre)) {
                throw new Exception("Every element of the array genres must be an instance of the class Genre.");
            }
        }

        $this->genres = $genres;
    }

    public function set_best_seller()
    {
        $this->is_best_seller = $this->vote >= 9 ? true : false;
    }

    public function get_vote()
    {
        if ($this->vote == false) {
            return 'no ratings yet';
        } else {
            return $this->vote;
        }
    }
}
