<?php

namespace spec;

use Tennis;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{

    public function it_score_1_0_game()
    {
        $this->score()->shouldReturn('Fifteen-Love');
    }

    public function it_score_a_scoreless_game()
    {
        $this->score()->shouldReturn('Love-All');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Tennis::class);
    }
}
