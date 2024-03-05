<?php

class Production
{
    public $genre;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;

    function __construct(
        Genre $genre,
        string $title,
        string $language,
        $vote = false
    ) {
        $this->genre = $genre;
        $this->title = $title;
        $this->og_language = $language;
        $this->vote = $vote;
        $this->set_best_seller();
    }

    public function set_best_seller()
    {
        $this->is_best_seller = $this->vote >= 9 ? true : false;
    }

    public function get_vote()
    {
        if ($this->vote == false) {
            return 'there are no votes for this title yet';
        } else {
            return $this->vote;
        }
    }
}
