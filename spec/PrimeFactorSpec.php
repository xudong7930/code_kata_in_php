<?php

namespace spec;

use PrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactor::class);
    }

    public function it_return_33_when_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    public function it_return_1_when_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    public function it_return_23_when_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    public function it_return_2255_when_100()
    {
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
