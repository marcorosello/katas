<?php
class Player
{
    private $name;
    private $points;


    public function __construct($name, $points) {
        $this->name = $name;
        $this->points = $points;
    }

    public function earnPoints($points) {
        $this->points += $points;
    }

    public function getPoints() {
        return $this->points;
    }
}
