<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use \Player;

class TennisGameSpec extends ObjectBehavior
{
    protected $marco;
    protected $vaida;

    function let()
    {
        $this->marco = new Player('Marco Rosello', 0);
        $this->vaida = new Player('Vaida Bytautaite', 0);
        $this->beConstructedWith($this->marco, $this->vaida);
    }

    function it_scores_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_15_love()
    {
        $this->marco->earnPoints(1);
        $this->score()->shouldReturn('15-Love');
    }

    //test win game
    //test advantages

    //test deuce
}
