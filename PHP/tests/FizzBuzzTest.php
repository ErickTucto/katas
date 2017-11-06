<?php

namespace Tests;

use Katas\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @dataProvider data_divisible_number_three
     */
    public function when_number_is_divisible_to_3($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'fizz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @dataProvider data_divisible_number_five
     */
    public function when_number_is_divisible_to_5($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'buzz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @dataProvider data_divisible_number_and_three_five
     */
    public function when_number_is_divisible_to_3_and_5($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'fizzbuzz',
            $fizzBuzz->number($number)
        );
    }

    public function data_divisible_number_three()
    {
        return [
            "Divisible Three" => [3], [6], [9], [12], [27], 
        ];
    }

    public function data_divisible_number_five()
    {
        return [
            "Divisible Five" => [5], [10], [20], [25], [35], 
        ];
    }

    public function data_divisible_number_and_three_five()
    {
        return [
            "Divisible Five" => [15], [30], [45]
        ];
    }
}
