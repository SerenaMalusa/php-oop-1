<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{

    protected $profits;
    protected $duration;
    public $release_date;

    function __construct(
        $_genre,
        $_title,
        $_language,
        $_vote,
        $_profits,
        $_duration,
        $_release_date
    ) {

        parent::__construct($_genre, $_title, $_language, $_vote);

        $this->set_data($_profits, $_duration, $_release_date);
    }

    function set_data($profits, $duration, $release_date)
    {
        $this->profits = $profits;
        $this->duration = $duration;
        $this->release_date = $release_date;
    }
}
