<?php

namespace PhpLeetCode\ArraysAndStrings\PlusOne;

class PlusOne
{
    /**
     * @param int [] $numbers
     * @return int []
     */
    public function plusOne(array $numbers): array
    {
        $carry = 1;
        $result = [];

        foreach (array_reverse($numbers) as $number) {
            $sum = $carry + $number;
            $carry = intdiv($sum, 10);
            $result[] = $sum % 10;
        }
        if ($carry > 0) $result[] = $carry;

        return array_reverse($result);
    }
}
