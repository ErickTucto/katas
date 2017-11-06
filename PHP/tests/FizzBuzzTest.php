<?php

namespace Tests;

use Katas\FizzBuzz;
/**
 * @link http://www.solveet.com/exercises/Kata-FizzBuzz/11
 * Fase1:
 * - Divisible on 3 return Fizz
 * - Divisible on 5 return Buzz
 * - Divisible on 3 and 5 return FizzBuzz
 * Fase2:
 * - Contains 3 return Fizz
 * - Contains 5 return Buzz
 * - Contains 3 and 5 return FizzBuzz
 * - Divisible on 5 and contains 3 return FizzBuzz
 * - Divisible on 3 and contains 5 return FizzBuzz
 */
class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @group fase1
     * @group fase2
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
     * @group fase1
     * @group fase2
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
     * @group fase1
     * @group fase2
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

    /**
     * @test
     * @group fase2
     * @dataProvider data_number_contains_3
     */
    public function if_the_number_contains_3($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'fizz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @group fase2
     * @dataProvider data_number_contains_5
     */
    public function if_the_number_contains_5($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'buzz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @group fase2
     * @dataProvider data_number_contains_3_and_5
     */
    public function if_the_number_contains_3_and_5($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'fizzbuzz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @group fase2
     * @dataProvider data_number_divisible_3_and_contains_5
     */
    public function if_the_number_is_divisible_3_and_contains_5($number)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertSame(
            'fizzbuzz',
            $fizzBuzz->number($number)
        );
    }

    /**
     * @test
     * @group fase2
     * @dataProvider data_number_divisible_5_and_contains_3
     */
    public function if_the_number_is_divisible_5_and_contains_3($number)
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
            "Divisible Five" => [5], [10], [20], [25], [55], 
        ];
    }

    public function data_divisible_number_and_three_five()
    {
        return [
            "Divisible Five" => [60], [90]
        ];
    }

    public function data_number_contains_3()
    {
        return [
            "Contains three" => [13], [23], [37]
        ];
    }

    public function data_number_contains_5()
    {
        return [
            "Contains three" => [52], [54], [56]
        ];
    }

    public function data_number_contains_3_and_5()
    {
        return [
            "Contains three" => [35], [53]
        ];
    }

    public function data_number_divisible_3_and_contains_5()
    {
        return [
            "Contains three" => [15], [51]
        ];
    }

    public function data_number_divisible_5_and_contains_3()
    {
        return [
            "Contains three" => [30]
        ];
    }
}
