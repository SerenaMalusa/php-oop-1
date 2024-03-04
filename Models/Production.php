<?php

class Production
{

    public $type;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;

    function __construct(
        $type,
        string $title,
        string $language,
        $vote = false
    ) {
        $this->type = $type;
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
