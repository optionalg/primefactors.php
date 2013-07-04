<?php

namespace Test;

use PrimeFactors\PrimeFactors;

class PrimeFactorsTests extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function givenANumberShouldReturnPrimeFactors()
    {
        $this->assertPrimeFactors(array(), 1);
        $this->assertPrimeFactors(array(2), 2);
        $this->assertPrimeFactors(array(3), 3);
        $this->assertPrimeFactors(array(2, 2), 4);
        $this->assertPrimeFactors(array(5), 5);
        $this->assertPrimeFactors(array(2, 3), 6);
        $this->assertPrimeFactors(array(7), 7);
        $this->assertPrimeFactors(array(2, 2, 2), 8);
        $this->assertPrimeFactors(array(3, 3), 9);
        $this->assertPrimeFactors(array(2, 5), 10);
        $this->assertPrimeFactors(array(11), 11);
        $this->assertPrimeFactors(array(2, 2, 3), 12);
        $this->assertPrimeFactors(array(2, 3, 5, 5, 7, 11, 13), 150150);
    }

    public function assertPrimeFactors($factors, $number)
    {
        assertEquals($factors, PrimeFactors::decompose($number), 'Test fails for ' . $number);
    }
}
