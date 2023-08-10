<?php

namespace PhpLeetCode\Easy\RemoveDuplicatesFromSortedArray;

class RemoveDuplicates
{
    /**
     * @param int[] $numbers
     * @return int
     */
    final public function removeDuplicates(array &$numbers): int
    {
        $numbers = array_unique($numbers);

        return count($numbers);
    }
}
