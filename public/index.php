<?php

require __DIR__.'/../vendor/autoload.php';

use Steven\Calculator\Calculator;

echo "This is the result of the sum of 6 and 9 = " . Calculator::sum(6, 9) . "<br>";

echo "This is the result of the substraction of 20 and 10 = " . Calculator::substraction(20, 10) . "<br>";

echo "This is the result of the multiplication of 4 and 7 = " . Calculator::multiplication(4, 7) . "<br>";

echo "This is the result of the division of 30 and 6 = " . Calculator::sum(30, 6) . "<br>";