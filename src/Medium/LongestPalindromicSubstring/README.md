# LongestPalindromicSubstring https://leetcode.com/problems/longest-palindromic-substring/description/

## Medium

Given a `string`, return the longest
palindromic substring in `string`.

### Example 1:

```
Input: s = "babad"
Output: "bab"
Explanation: "aba" is also a valid answer.
```

### Example 2:

```
Input: s = "cbbd"
Output: "bb"
```

### Constraints:

* `1 <= s.length <= 1000`
* `string` consist of only digits and English letters.

### Solution

The `LongestPalindromicSubstring` class provides a solution to find the longest palindromic substring in a given string.

1. The `transformString` method transforms the input string `s` into a new string `transformed` with '#' characters
   inserted between each character of the input string. This transformation simplifies the palindromic substring
   identification process.

2. The `longestPalindrome` method utilizes a technique known as "Manacher's Algorithm" to find the longest palindromic
   substring. It maintains several variables to keep track of the palindrome properties and positions.

3. It iterates through the `transformed` string and, for each character, calculates the length of the palindrome
   centered at that character. It expands the palindrome to both sides using a "mirror" technique.

4. The algorithm maintains the `maxLen`, `center`, `maxCenter`, and `maxPalindromeLen` variables to identify the longest
   palindrome and its center.

5. The `palindromeLengths` array stores the lengths of palindromes centered at each character.

6. The algorithm calculates the start index and length of the longest palindromic substring using the `maxCenter`
   and `maxPalindromeLen` variables and extracts the substring from the original input string.

## Example

```php
$string = "babad";
$substringFinder = new LongestPalindromicSubstring();
$longestPalindrome = $substringFinder->longestPalindrome($string);
echo $longestPalindrome; // Output: "bab" or "aba"
```

### Time Complexity

The time complexity of the `longestPalindrome` method is O(n), where n is the length of the input string `s`. The
algorithm iterates through the transformed string once, expanding palindromes as it goes.

### Space Complexity

The space complexity of the solution is O(n), where n is the length of the input string. This space is used for
the `transformed` string, `palindromeLengths` array, and various variables used by the algorithm.

