<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumbersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('\RomanNumbers');
    }

    function it_should_transform() {
        $this->convertArabicToRoman(1)->shouldBe('I');
        $this->convertArabicToRoman(2)->shouldBe('II');
        $this->convertArabicToRoman(5)->shouldBe('V');
        $this->convertArabicToRoman(6)->shouldBe('VI');
        $this->convertArabicToRoman(7)->shouldBe('VII');
        $this->convertArabicToRoman(10)->shouldBe('X');
        $this->convertArabicToRoman(4)->shouldBe('IV');
        $this->convertArabicToRoman(90)->shouldBe('XC');
    }
}
