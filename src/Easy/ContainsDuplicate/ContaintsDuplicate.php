<?php

namespace PhpLeetCode\Easy\ContainsDuplicate;

class ContaintsDuplicate
{
    /**
     * @param int[] $nums
     * @return bool
     */
    final public function containsDuplicate(array $nums): bool
    {
        return count(array_unique($nums)) !== count($nums);
    }
}
