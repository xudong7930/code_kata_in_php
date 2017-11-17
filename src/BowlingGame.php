<?php

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        if ($pins < 0) {
            throw new Exception('InvalidParamException');
        }
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;
        foreach (range(1, 10) as $item) {
            if ($this->isStrike($roll)) {
                $score += 10 + $this->strikeBonus($roll);
                $roll += 1;
                continue;
            } 

            $score += $this->isSpare($roll) ? 10 + $this->spareBonus($roll) : $this->getDefaultFrameScore($roll);
            $roll += 2;  
        }

        return $score;
    }

    public function getDefaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll+1];
    }

    public function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll+1] == 10;
    }

    public function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    public function strikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    public function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }
}
