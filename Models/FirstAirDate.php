<?php

trait FirstAirDate
{
    protected $year;
    protected $day_and_month;

    function set_first_air_date($date)
    {
        $this->day_and_month = substr($date, 0, 5);
        $this->year = substr($date, 6, 4);
    }

    function get_first_air_date()
    {
        return $this->day_and_month . '/' . $this->year;
    }
}
