<?php

namespace PhpLeetCode\ArraysAndStrings\FindPivotIndex;

class FindPivotIndex
{
    /**
     * @param int [] $nums
     * @return int
     */
    public function findMiddleIndex(array $nums): int
    {
        $numsSum = array_sum($nums);
        $leftSum = 0;

        for ($pivotIndex = 0; $pivotIndex < count($nums); $pivotIndex++) {
            if ($leftSum === $numsSum - $leftSum - $nums[$pivotIndex]) return $pivotIndex;

            $leftSum += $nums[$pivotIndex];
        }

        return -1;
    }
}
