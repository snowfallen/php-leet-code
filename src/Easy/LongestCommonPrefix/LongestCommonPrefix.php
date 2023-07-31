<?php

namespace PhpLeetCode\Easy\LongestCommonPrefix;

class LongestCommonPrefix
{
    /**
     * @param string[] $words
     * @return string
     */
    final public function getLongestCommonPrefix(array $words): string
    {
        if (empty($words)) {
            return "";
        }

        $longestCommonPrefix = "";

        for ($wordIndex = 0; $wordIndex < strlen($words[0]); $wordIndex++) {
            $longestCommonPrefix .= $words[0][$wordIndex];
            foreach ($words as $word) {
                if (str_starts_with($word, $longestCommonPrefix)) {
                    continue;
                } else {
                    return substr($longestCommonPrefix, 0, -1);
                }
            }
        }

        return $longestCommonPrefix;
    }
}
