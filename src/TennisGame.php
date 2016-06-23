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

    public function score() {
      
        if ($this->inGeneralScore()) {
            return $this->generalScore();
        }

        if ($this->inDeuce()) {
            return 'Deuce';
        }

        if ($this->inAdvantage()) {
            return $this->leader()->getName() . ' advantage';
        }

        if ($this->inWinner()) {
            return $this->leader()->getName() . ' wins';
        }

        throw new Exception("Something went wrong");

    }

    private function inGeneralScore() {
        return $this->player->getPoints() <= 3 && $this->player2->getPoints() <= 3;
    }

    private function generalScore() {
        $score1 = $this->pointsToScoreMap[$this->player->getPoints()];
        $score2 = $this->pointsToScoreMap[$this->player2->getPoints()];

        return ($score1 == $score2) ? $score2 . '-All' : $score1 . '-' . $score2;
    }

    private function inDeuce() {
        return ($this->player->getPoints() == $this->player2->getPoints());
    }

    private function inWinner() {
        return abs($this->player->getPoints() - $this->player2->getPoints()) >= 2;
    }

    private function inAdvantage() {
        return abs($this->player->getPoints() - $this->player2->getPoints()) == 1;
    }

    private function leader() {
        return ($this->player->getPoints() > $this->player2->getPoints()) ? $this->player :  $this->player2;
    }

}
