<?php

namespace Katas;

class FizzBuzz
{
    /**
     * @var
     */
    protected $result;

    public function number($number)
    {
        if ($number % 3 == 0) {
            $this->result = 'fizz';
        }
        if ($number % 5 == 0) {
            $this->result .= 'buzz';
        }
        return ($this->result) ?? $number;
    }
}
