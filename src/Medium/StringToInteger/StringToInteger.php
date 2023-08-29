<?php

declare(strict_types=1);

namespace PhpLeetCode\Medium\StringToInteger;

class StringToInteger
{
    /**
     * @param string $stringWithNumber
     * @return int
     */
    public function myAtoi(string $stringWithNumber): int
    {
        $integer = intval(str_replace('e', '.', $stringWithNumber));

        return max(min($integer, 2147483647), -2147483648);
    }
}
