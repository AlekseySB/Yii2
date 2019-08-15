<?php


namespace app\models;


class Day
{
    public $date;
    public $activities = [];
    public $isWeekend;
    public $isHollyday;

    public function __construct($date, $activities, $isWeekend=false, $isHollyday=false){

        $this->date = $date;
        $this->activities = $activities;
        $this->isWeekend = $isWeekend;
        $this->isHollyday = $isHollyday;
    }
    
}