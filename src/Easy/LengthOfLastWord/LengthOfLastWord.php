<?php

namespace PhpLeetCode\Easy\LengthOfLastWord;

class LengthOfLastWord
{
    /**
     * @param string $string
     * @return int
     */
    final public function lengthOfLastWord(string $string): int
    {
        $count = 0;
        for ($stringIndex = strlen($string) - 1; $stringIndex >= 0; $stringIndex--) {
            if ($string[$stringIndex] !== " ") {
                $count++;
            } else {
                if ($count > 0) break;
            }
        }

        return $count;
    }
}
