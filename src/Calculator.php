<?php

namespace Steven\Calculator;

class Calculator
{
    public static function sum(int $x, int $y)
    {
        return $x + $y;
    }

    public static function substraction(int $x, int $y)
    {
        return $x - $y;
    }

    public static function multiplication(int $x, int $y)
    {
        return $x * $y;
    }

    public static function division(int $x, int $y)
    {
        return $x / $y;
    }
}