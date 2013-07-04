<?php

namespace PrimeFactors;

/**
 * The fundamental theorem of arithmetic states that every integer greater than 1 is either
 * prime or is the product of prime numbers. There is one and only one set of prime factors for that
 * number.
 *
 * @see https://en.wikipedia.org/wiki/Fundamental_theorem_of_arithmetic source
 */
class PrimeFactors
{
    /**
     * Decompose a integer into an array of prime factors.
     *
     * @param int $integer the integer to be decomposed
     *
     * @return array an array of primes
     */
    public static function decompose($integer)
    {
        $primes = array();

        for ($candidate = 2; $integer >= $candidate * $candidate; $candidate++)
            for (; $integer % $candidate == 0; $integer /= $candidate)
                $primes[] = $candidate;

        if ($integer > 1) {
            $primes[] = $integer;
        }

        return $primes;
    }
}
