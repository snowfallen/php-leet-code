<?php

namespace PhpLeetCode\Easy\RemoveElement;

class RemoveElement
{
    /**
     * @param int[] $numbers
     * @param int $deletedValue
     * @return int
     */
    final public function removeElement(array &$numbers, int $deletedValue): int
    {
        $numbers = array_diff($numbers, [$deletedValue]);

        return count($numbers);
    }
}
