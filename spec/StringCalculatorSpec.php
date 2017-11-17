<?php

namespace spec;

use StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    public function it_return_6_when_123()
    {
        $this->add(' 1, 2,3 ')->shouldReturn(6);
    }

    public function it_return_4_when_22()
    {
        $this->add('2,2')->shouldReturn(4);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(StringCalculator::class);
    }
}
