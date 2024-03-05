<?php

require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';
require_once __DIR__ . '/FirstAirDate.php';

class Serie extends Production
{
    protected $seasons;
    use FirstAirDate;

    function __construct(
        $_genre,
        $_title,
        $_language,
        $_vote,
        $_seasons,
        $_first_air_date = ''
    ) {
        parent::__construct($_genre, $_title, $_language, $_vote,);
        $this->set_first_air_date($_first_air_date);
        $this->set_data($_seasons, $_first_air_date);
    }

    function set_data($_seasons)
    {
        $this->seasons = $_seasons;
    }

    function get_seasons()
    {
        return $this->seasons;
    }
}
