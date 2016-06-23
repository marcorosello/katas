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
        $this->marco = new Player('Marco', 0);
        $this->vaida = new Player('Vaida', 0);
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

    function it_scores_15_all()
    {
        $this->marco->earnPoints(1);
        $this->vaida->earnPoints(1);
        $this->score()->shouldReturn('15-All');
    }

    function it_marco_wins()
    {
        $this->marco->earnPoints(4);
        $this->vaida->earnPoints(1);
        $this->score()->shouldReturn('Marco wins');
    }

    function it_vaida_wins()
    {
        $this->marco->earnPoints(1);
        $this->vaida->earnPoints(4);
        $this->score()->shouldReturn('Vaida wins');
    }

    function it_deuce()
    {
        $this->marco->earnPoints(4);
        $this->vaida->earnPoints(4);
        $this->score()->shouldReturn('Deuce');
    }

    function it_marco_advantage()
    {
        $this->marco->earnPoints(4);
        $this->vaida->earnPoints(3);
        $this->score()->shouldReturn('Marco advantage');
    }

    function it_vaida_advantage()
    {
        $this->marco->earnPoints(3);
        $this->vaida->earnPoints(4);
        $this->score()->shouldReturn('Vaida advantage');
    }

}
