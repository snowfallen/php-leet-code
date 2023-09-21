<?php

namespace PhpLeetCode\Easy\MergeTwoSortedArray;

class MergeSortedArray
{
    /**
     * @param int[] $nums1
     * @param int $nums1Length
     * @param int[] $nums2
     * @param int $nums2Length
     * @return array
     */
    public function merge(array &$nums1, int $nums1Length, array $nums2, int $nums2Length): array
    {
        $nums1End = count($nums1) - 1;
        $nums1Max = $nums1Length - 1;
        $nums2Max = $nums2Length - 1;

        while ($nums2Max >= 0) {
            if ($nums1[$nums1Max] > $nums2[$nums2Max]) {
                $nums1[$nums1End] = $nums1[$nums1Max];
                $nums1Max--;
            } else {
                $nums1[$nums1End] = $nums2[$nums2Max];
                $nums2Max--;
            }
            $nums1End--;
        }

        return $nums1;
    }
}