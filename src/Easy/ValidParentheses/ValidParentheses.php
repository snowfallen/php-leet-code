<?php

namespace PhpLeetCode\Easy\ValidParentheses;

class ValidParentheses
{
    /**
     * @param string $parentheses
     * @return bool
     */
    final public function isValid(string $parentheses): bool
    {
        $parenthesesLength = strlen($parentheses);
        if ($parenthesesLength % 2 !== 0) return false;

        $bracketSet = ['(' => ')', '[' => ']', '{' => '}'];
        $bracketStack = [];

        for ($i = 0; $i < $parenthesesLength; $i++) {
            if (array_key_exists($parentheses[$i], $bracketSet)) {
                $bracketStack[] = $bracketSet[$parentheses[$i]];
            } elseif (array_pop($bracketStack) !== $parentheses[$i]) {
                return false;
            }
        }

        return count($bracketStack) === 0;
    }
}