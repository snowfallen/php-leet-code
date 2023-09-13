<?php

namespace PhpLeetCode\Medium\IntegerToRoman;

class IntegerToRoman
{
    /**
     * @param int $number
     * @return string
     */
    public function intToRoman(int $number): string
    {
        $romanNumerals = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1,
        ];

        $romanNumber = '';

        foreach ($romanNumerals as $roman => $value) {
            while ($number >= $value) {
                $romanNumber .= $roman;
                $number -= $value;
            }
        }

        return $romanNumber;
    }
}
