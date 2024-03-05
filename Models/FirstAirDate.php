<?php

trait FirstAirDate
{
    protected $year;
    protected $day_and_month;

    function set_first_air_date($date)
    {
        if (strlen($date) == 10) {
            $this->day_and_month = substr($date, 0, 5);
            $this->year = substr($date, 6, 4);
        } else if (strlen($date) == 4) {
            $this->year = $date;
            $this->day_and_month = '';
        } else {
            $this->year = '';
            $this->day_and_month = '';
        }
    }

    function get_first_air_date()
    {
        if (!empty($this->day_and_month)) {
            return $this->day_and_month . '/' . $this->year;
        } elseif (!empty($this->year)) {
            return $this->year;
        } else {
            return 'not registered';
        }
    }
}
