<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MinesweeperSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Minesweeper');
    }

    function it_finds_one_mine() {
        $this->findMines('O X')->shouldReturn('1 X');
    }
}
