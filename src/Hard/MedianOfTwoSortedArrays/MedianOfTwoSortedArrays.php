<?php

namespace PhpLeetCode\Hard\MedianOfTwoSortedArrays;

class MedianOfTwoSortedArrays
{
    /**
     * @param int[] $numbers
     * @param int[] $numbers2
     * @return float
     */
    final public function findMedianSortedArrays(array $numbers, array $numbers2): float
    {
        $mergedArrays = array_merge($numbers, $numbers2);
        $mergedArraysCount = count($mergedArrays);
        sort($mergedArrays);

        $leftMedianIndex = intdiv($mergedArraysCount - 1, 2);
        $rightMedianIndex = intdiv($mergedArraysCount, 2);

        return $mergedArraysCount % 2 === 0
            ? ($mergedArrays[$leftMedianIndex] + $mergedArrays[$rightMedianIndex]) / 2
            : $mergedArrays[($mergedArraysCount - 1) / 2];
    }
}
