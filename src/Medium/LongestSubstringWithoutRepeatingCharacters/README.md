# LongestSubstringWithoutRepeatingCharacters https://leetcode.com/problems/longest-substring-without-repeating-characters/

## Medium

Given a string , find the length of the longest substring without repeating characters.

### Example 1:

```
Input: s = "abcabcbb"
Output: 3
Explanation: The answer is "abc", with the length of 3.
```

### Example 2:

```
Input: s = "bbbbb"
Output: 1
Explanation: The answer is "b", with the length of 1.
```

### Example 3:

```
Input: s = "pwwkew"
Output: 3
Explanation: The answer is "wke", with the length of 3.
Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
```

### Constraints:

* `0 <= string.length <= 5 * 104`
* `string` consists of English letters, digits, symbols and spaces.

### Solution

The `lengthOfLongestSubstring` function takes a string `$string` as input and returns the length of the longest
substring
without repeating characters.

1. The function initializes variables:
    - `$stringLength`: The length of the input string.
    - `$startPointer`: A pointer that tracks the starting index of the current substring.
    - `$longestSubstringLength`: The length of the longest substring without repeating characters found so far.
    - `$array`: An associative array that stores the most recent index of each character encountered.

2. The function uses a loop to iterate through each character of the input string.

3. For each character, it checks if the character is already present in the `$array` and if its index is greater than or
   equal to the current `$startPointer`. If this condition is true, it means the character is repeated, and the
   substring needs to be shifted to the next index after the last occurrence of the repeated character. Therefore, the
   `$startPointer` is updated to `$array[$character] + 1`.

4. If the current index minus `$startPointer` is equal to the current `$longestSubstringLength`, it indicates that a new
   character is encountered in the substring. In this case, the `$longestSubstringLength` is incremented.

5. The most recent index of the current character is stored in the `$array`.

6. The function continues this process for each character, updating the `$longestSubstringLength` as necessary.

7. Finally, the `$longestSubstringLength` is returned as the result.

## Example

```php
$string = "abcabcbb";
$substringFinder = new LongestSubstringWithoutRepeatingCharacters();
$result = $substringFinder->lengthOfLongestSubstring($string);
echo $result; // Output: 3
```

## Time Complexity

The time complexity of the `lengthOfLongestSubstring` function is O(n), where n is the length of the input string. This
is
because the function iterates through each character of the string once.

## Space Complexity

The space complexity of the function is O(m), where m is the number of unique characters in the input string. This is
because the `$array` stores the most recent index of each character, and in the worst case, it can store all unique
characters in the string.
