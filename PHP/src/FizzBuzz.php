<?php

namespace Katas;

class FizzBuzz
{
    /**
     * @var string|null Should contain a 'fizz', 'buzz' or 'fizzbuzz'
     */
    protected $result;

    public function number($number)
    {
        ($number % 3 != 0) ?: $this->result = 'fizz';
        ($number % 5 != 0) ?: $this->result .= 'buzz';

        return ($this->result) ?? $number;
    }
}
