<?php

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    public function add($number)
    {
        $numbers = $this->parseNumber($number);
        return array_sum(array_map(function ($item) {
            if ($item >= self::MAX_NUMBER_ALLOWED) return 0;
            return $item;
        }, $numbers));
    }

    protected function parseNumber($number)
    {
        return preg_split('/\s*(,|\\n)\s*/', $number);
    }


}
