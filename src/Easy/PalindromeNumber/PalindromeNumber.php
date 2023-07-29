<?php

namespace PhpLeetCode\Easy\PalindromeNumber;

class PalindromeNumber
{
    /**
     * @param int $number
     * @return bool
     */
    final public function isPalindrome(int $number): bool
    {
        $tempNumber = $number;
        $reversedNumber = 0;
        while ($tempNumber > 0) {
            $reversedNumber = ($reversedNumber * 10) + ($tempNumber % 10);
            $tempNumber = (int)($tempNumber / 10);
        }

        return $number === $reversedNumber;
    }
}
