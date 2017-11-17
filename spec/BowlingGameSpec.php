<?php

namespace spec;

use BowlingGame;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{

    public function it_score_a_perfect_game()
    {
        $this->rollTimes(12, 10);
        $this->score()->shouldBe(300);
    }

    public function it_awards_a_tow_roll_bonus_for_a_strike()
    {
        $this->roll(10);
        $this->roll(7);
        $this->roll(2);

        $this->rollTimes(17, 0);

        $this->score()->shouldBe(28);
    }

    public function it_award_aone_roll_bonus_for_ever_spare()
    {
        $this->rollSpare();
        $this->roll(5);
        $this->rollTimes(18, 0);

        $this->score()->shouldBe(20);
    }

    public function rollSpare()
    {
        $this->roll(2);
        $this->roll(8);
    }

    public function rollTimes($count, $pins)
    {
         foreach (range(1, $count) as $item) {
             $this->roll($pins);
         }
    }


    public function it_score_the_sum_of_all_pins()
    {
        $this->rollTimes(20, 1);
        $this->score()->shouldBe(20);
    }

    public function it_score_a_gutter_game_as_zero()
    {
        $this->rollTimes(20, 0);
        $this->score()->shouldBe(0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(BowlingGame::class);
    }
}
