<?php

namespace PhpLeetCode\Medium\MaximumSubarray;

class MaximumSubarray
{
    /**
     * @param int[] $nums
     * @return int
     */
    final public function maxSubArray(array $nums): int
    {
        $currentSum = 0;
        $maxSum = $nums[0];

        foreach ($nums as $num) {
            $currentSum = max($currentSum + $num, $num);
            $maxSum = max($maxSum, $currentSum);
        }

        return $maxSum;
    }
}
