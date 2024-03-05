<?php

require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';
require_once __DIR__ . '/FirstAirDate.php';

class Movie extends Production
{

    protected $profits;
    protected $duration;
    use FirstAirDate;

    function __construct(
        $_genre,
        $_title,
        $_language,
        $_vote,
        $_profits,
        $_duration,
        $_release_date = ''
    ) {

        parent::__construct($_genre, $_title, $_language, $_vote);
        $this->set_first_air_date($_release_date);
        $this->set_data($_profits, $_duration);
    }

    function set_data($profits, $duration)
    {
        $this->profits = $profits;
        $this->duration = $duration;
    }

    function get_profits()
    {
        return $this->profits;
    }

    function get_duration()
    {
        return $this->duration;
    }
}
