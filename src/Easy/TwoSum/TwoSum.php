<?php

namespace PhpLeetCode\Easy\TwoSum;

class TwoSum
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    final public function findTwoSum(array $nums, int $target): array
    {
        $map = [];
        foreach ($nums as $numIndex => $num) {
            if (isset($map[$num])) {
                return [$map[$num], $numIndex];
            }

            $map += [$target - $num => $numIndex];
        }

        return [];
    }
}
