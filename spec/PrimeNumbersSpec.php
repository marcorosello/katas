<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PrimeNumbers');
    }

    function it_should_find_1()
    {
        $this->getPrimes(1)->shouldBe([]);
        $this->getPrimes(3)->shouldBe([3]);
        $this->getPrimes(6)->shouldBe([2, 3]);
        $this->getPrimes(53)->shouldBe([53]);
        $this->getPrimes(71)->shouldBe([71]);
        $this->getPrimes(15)->shouldBe([3, 5]);
    }
}
