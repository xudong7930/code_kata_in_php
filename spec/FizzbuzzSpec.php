<?php

namespace spec;

use Fizzbuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzbuzzSpec extends ObjectBehavior
{
    public function it_can_translate_3()
    {
        $this->executeUpTo(3)->shouldReturn([1, 2, 'fizz']);
    }

    public function it_can_translate_5()
    {
        $this->executeUpTo(5)->shouldEqual([1, 2, 'fizz', 4, 'buzz']);
    }

    public function it_return_buzz_for_5()
    {
        $this->execute(5)->shouldReturn('buzz');
    }

    public function it_return_fizzbuzz_for_15()
    {
        $this->execute(15)->shouldReturn('fizzbuzz');    
    }

    public function it_return_fizz_for_3()
    {
        $this->execute(3)->shouldReturn('fizz');
    }

    public function it_return_2_for_2()
    {
        $this->execute(2)->shouldReturn(2);
    }

    public function it_return_1_for_1()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Fizzbuzz::class);
    }
}
