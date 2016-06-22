<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BinaryConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BinaryConverter');
    }

    function it_should_convert_binary()
    {
        $this->convertBinary(0)->shouldBe(0);
        $this->convertBinary(1)->shouldBe(1);
        $this->convertBinary(10)->shouldBe(2);
        $this->convertBinary(101)->shouldBe(5);
    }

    function it_should_convert_decimal_to_binary()
    {
        $this->convertDecimal(1)->shouldBe(1);
        $this->convertDecimal(2)->shouldBe(10);
        $this->convertDecimal(5)->shouldBe(101);

    }

}
