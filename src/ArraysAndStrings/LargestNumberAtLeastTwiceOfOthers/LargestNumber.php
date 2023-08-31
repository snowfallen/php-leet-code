<?php

namespace PhpLeetCode\ArraysAndStrings\LargestNumberAtLeastTwiceOfOthers;

class LargestNumber
{
    /**
     * @param int [] $numbers
     * @return int
     */
    public function dominantIndex(array $numbers): int
    {
        $sortedNumbers = $numbers;
        sort($sortedNumbers);

        $maxNumber = array_pop($sortedNumbers);
        $maxNumberIndex = array_search($maxNumber, $numbers);
        $lastNumber = array_pop($sortedNumbers);

        return $lastNumber !== 0 && ($maxNumber / $lastNumber) < 2 ? -1 : $maxNumberIndex;
    }
}
