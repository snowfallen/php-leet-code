# 14. Longest Common Prefix

Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

```
Input: words = ["flower","flow","flight"]
Output: "fl"
```

```
Input: words = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
```

### Constraints

* `1 <= words.length <= 200`
* `0 <= words[index].length <= 200`
* `words[index]` consists of only lowercase English letters.

### Solution

# Longest Common Prefix

## Description

This PHP class `LongestCommonPrefix` provides a method `getLongestCommonPrefix` to find the longest common prefix among
an array of strings.

## Function Explanation

The `getLongestCommonPrefix` function takes an array of strings `$words` as input and returns the longest common prefix
as a string.

1. The function first checks if the input `$words` array is empty. If it is empty, the function immediately returns an
   empty string, as there is no common prefix in an empty array.

2. The variable `$longestCommonPrefix` is initialized to an empty string. This variable will store the current longest
   common prefix as it is built character by character.

3. The function uses a nested loop to find the longest common prefix. The outer loop iterates through each character of
   the first word in the array (assuming it is the longest common prefix at the beginning).

4. Within the outer loop, the variable `$longestCommonPrefix` is appended with the current character of the first word
   in each iteration.

5. The inner loop iterates through each word in the array to check if the current `$longestCommonPrefix` is a prefix of
   each word. It does this by using the `str_starts_with` function. If the current prefix is a prefix of all words, the
   inner loop continues to the next iteration.

6. If the current prefix is not a prefix of any word, the function returns the `$longestCommonPrefix` excluding the last
   character with `substr`. This effectively reduces the common prefix by one character at a time until it is a prefix
   of all words.

7. The function continues this process, character by character, until it finds the longest common prefix among all the
   words.

8. The final calculated is the longest common prefix is returned as the result.