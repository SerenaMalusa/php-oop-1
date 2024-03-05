<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{
    protected $seasons;
    protected $first_air_date;

    function __construct(
        $_genre,
        $_title,
        $_language,
        $_vote,
        $_seasons,
        $_first_air_date
    ) {
        parent::__construct($_genre, $_title, $_language, $_vote,);

        $this->set_data($_seasons, $_first_air_date);
    }

    function set_data($_seasons, $_first_air_date)
    {
        $this->seasons = $_seasons;
        $this->first_air_date = $_first_air_date;
    }

    function get_seasons()
    {
        return $this->seasons;
    }

    function get_first_air_date()
    {
        return $this->first_air_date;
    }
}
