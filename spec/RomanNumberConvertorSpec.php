<?php

namespace spec;

use RomanNumberConvertor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumberConvertorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumberConvertor::class);
    }

    public function it_calc_romannumber_800()
    {
        $this->convert(800)->shouldReturn('DCCC');
    }

    public function it_calc_romannumber_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    public function it_calc_romannumber_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    public function it_calc_romannumber_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    public function it_calc_romannumber_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    
}
