<?php

use PHPUnit\Framework\TestCase;
use Steven\Calculator\Calculator;

class CalculatorTest extends TestCase
{
    /** @test */
    function can_add_two_numbers()
    {
        $this->assertSame(9, Calculator::sum(5,4));
    }

    /** @test */
    function can_substract_two_numbers()
    {
        $this->assertSame(6, Calculator::substraction(9,3));
    }

    /** @test */
    function can_multiply_two_numbers()
    {
        $this->assertSame(15, Calculator::multiplication(5,3));
    }

    /** @test */
    function can_divide_two_numbers()
    {
        $this->assertSame(4, Calculator::division(20, 5));
    }
}