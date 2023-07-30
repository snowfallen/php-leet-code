<?php

namespace PhpLeetCode\Easy\RomanToInteger;

class RomanToInteger
{
    /**
     * @param string $romanNumber
     * @return int
     */
    final public function romanToInteger(string $romanNumber): int
    {
        if (strlen($romanNumber) < 1) {
            return 0;
        }

        $romanNumbers = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $integerNumber = 0;

        for ($index = 0; $index < strlen($romanNumber) - 1; $index++) {
            if (isset($romanNumbers[$romanNumber[$index]])) {
                if ($romanNumbers[$romanNumber[$index]] < $romanNumbers[$romanNumber[$index + 1]]) {
                    $integerNumber -= $romanNumbers[$romanNumber[$index]];
                } else {
                    $integerNumber += $romanNumbers[$romanNumber[$index]];
                }
            } else {
                return 0;
            }
        }

        return $integerNumber + $romanNumbers[substr($romanNumber, -1)];
    }
}
