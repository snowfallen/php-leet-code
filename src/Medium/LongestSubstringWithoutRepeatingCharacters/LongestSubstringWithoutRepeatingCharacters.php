<?php

namespace PhpLeetCode\Medium\LongestSubstringWithoutRepeatingCharacters;

class LongestSubstringWithoutRepeatingCharacters
{
    /**
     * @param string $string
     * @return int
     */
    final public function lengthOfLongestSubstring(string $string): int
    {
        $stringLength = strlen($string);
        $startPointer = 0;
        $longestSubstringLength = 0;

        for ($characterIndex = 0; $characterIndex < $stringLength; $characterIndex++) {
            $character = $string[$characterIndex];
            if (isset($array[$character]) && $array[$character] >= $startPointer) {
                $startPointer = $array[$character] + 1;
            } elseif ($characterIndex - $startPointer === $longestSubstringLength) {
                $longestSubstringLength++;
            }
            $array[$character] = $characterIndex;
        }

        return $longestSubstringLength;
    }
}
