<?php

namespace Tests;

use Katas\PrimeFactor;

/**
 * Method primer of class PrimeFactor must return array prime factors
 */
class PrimeFactorTest extends TestCase
{
    /**
     * @test
     * @dataProvider data_numbers_prime_factors
     */
    public function return_prime_factors_on_array($number, $expected_array)
    {
        $prime = new PrimeFactor;
        $primes_array = $prime->primes($number);
        $this->assertSame(
            $primes_array,
            $expected_array
        );
    }

    public function data_numbers_prime_factors()
    {
        return [
            "Number and Primer" =>
                [1, []],
                [2, [2]],
                [3, [3]],
                [4, [2, 2]],
                [5, [5]],
                [6, [2, 3]],
                [8, [2, 2, 2]],
                [9, [3, 3]],
                [100, [2, 2, 5, 5]],
        ];
    }
}
