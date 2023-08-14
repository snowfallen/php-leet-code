<?php

namespace PhpLeetCode\Medium\ReverseInteger;

class ReverseInteger
{
    /**
     * @param int $number
     * @return int
     */
    final public function reverse(int $number): int
    {
        $reversedNumber = 0;
        $absNumber = abs($number);

        while ($absNumber > 0) {
            $lastDigit = $absNumber % 10;
            $reversedNumber = ($reversedNumber * 10) + $lastDigit;
            $absNumber = (int)($absNumber / 10);
        }

        if ($number < 0) $reversedNumber *= -1;

        return ($reversedNumber < -pow(2, 31)
            || $reversedNumber > pow(2, 31) - 1)
            ? 0
            : $reversedNumber;
    }
}
