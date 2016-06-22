<?php

class TennisGame
{
    private $player;
    private $player2;
    private $pointsToScoreMap = [
        0 => 'Love',
        1 => '15',
        2 => '30',
        3 => '40'
    ];


    public function __construct($player, $player2)
    {
        $this->player = $player;
        $this->player2 = $player2;
    }

    public function score()
    {
        $score1 = $this->pointsToScoreMap[$this->player->getPoints()];
        $score2 = $this->pointsToScoreMap[$this->player2->getPoints()];

        return ($score1 == $score2) ? $score2 . '-All' : $score1 . '-' . $score2;
    }
}
