# [String to Integer](https://leetcode.com/problems/string-to-integer-atoi/description/)

## Medium

Implement the `myAtoi(string stringWithNumber)` function, which converts a string to a 32-bit signed integer (similar to
C/C++'s atoi
function).

The algorithm for `myAtoi(string stringWithNumber)` is as follows:

Read in and ignore any leading whitespace.
Check if the next character (if not already at the end of the string) is `-` or `+`. Read this character in if it is
either. This determines if the final result is negative or positive respectively. Assume the result is positive if
neither is present.
Read in next the characters until the next non-digit character or the end of the input is reached. The rest of the
string is ignored.
Convert these digits into an integer `(i.e. "123" -> 123, "0032" -> 32)`. If no digits were read, then the integer
is `0`.
Change the sign as necessary (from step 2).
If the integer is out of the 32-bit signed integer range `[-231, 231 - 1]`, then clamp the integer so that it remains in
the range. Specifically, integers less than `-231` should be clamped to `-231`, and integers greater than `231 - 1`
should be
clamped to `231 - 1`.
Return the integer as the final result.
Note:

Only the space character ' ' is considered a whitespace character.
Do not ignore any characters other than the leading whitespace or the rest of the string after the digits.

### Example 1:

```
Input: stringWithNumber = "42"
Output: 42
Explanation: The underlined characters are what is read in, the caret is the current reader position.
Step 1: "42" (no characters read because there is no leading whitespace)
         ^
Step 2: "42" (no characters read because there is neither a '-' nor '+')
         ^
Step 3: "42" ("42" is read in)
           ^
The parsed integer is 42.
Since 42 is in the range [-231, 231 - 1], the final result is 42.
```

### Example 2:

```
Input: stringWithNumber = "   -42"
Output: -42
Explanation:
Step 1: "   -42" (leading whitespace is read and ignored)
            ^
Step 2: "   -42" ('-' is read, so the result should be negative)
             ^
Step 3: "   -42" ("42" is read in)
               ^
The parsed integer is -42.
Since -42 is in the range [-231, 231 - 1], the final result is -42.
```

### Example 3:

```
Input: stringWithNumber = "4193 with words"
Output: 4193
Explanation:
Step 1: "4193 with words" (no characters read because there is no leading whitespace)
         ^
Step 2: "4193 with words" (no characters read because there is neither a '-' nor '+')
         ^
Step 3: "4193 with words" ("4193" is read in; reading stops because the next character is a non-digit)
             ^
The parsed integer is 4193.
Since 4193 is in the range [-231, 231 - 1], the final result is 4193.
```

### Constraints:

* `0 <= stringWithNumber.length <= 200`
* `stringWithNumber` consists of English letters (lower-case and upper-case), digits (0-9), `' '`, `+`, `-`, and `.`.

### Solution

#### `myAtoi(string $stringWithNumber): int`

Converts the input string to an integer according to the following rules:

1. Leading whitespace characters are ignored.
2. An optional plus or minus sign may appear before or after the digits.
3. The conversion stops when a non-digit character is encountered.
4. If no valid conversion could be performed, the function returns `0`.

The method replaces any occurrences of the letter 'e' with a dot ('.'), and then uses the `intval` function to perform
the conversion. The result is then constrained to the range of 32-bit signed integers.

#### ***Why str_replace is used??***

The usage of str_replace is a preprocessing step in the myAtoi method that replaces any occurrences of the letter 'e'
with a dot '.' in the input string before performing the integer conversion. This step is introduced to handle scenarios
where the input string contains 'e' as a representation of scientific notation, which is not directly supported by the
`intval` function.

In scientific notation, 'e' represents the exponent part of a number. For example, "1.2e3" represents 1200. However,
since your code aims to handle plain integer conversions, this notation could lead to incorrect results if not handled
properly.

By replacing 'e' with '.', you're effectively removing the scientific notation part of the string, ensuring that the
string represents a plain integer that can be directly converted using the `intval` function.

For example:

```
Input: "1.2e3"
After str_replace: "1.2.3"
Result of intval: 1 (since non-digit characters stop the conversion)
```

## Time Complexity

The time complexity of the `myAtoi` method is primarily determined by the `intval` function and the subsequent
arithmetic operations. The `intval` function has a linear time complexity O(n), where n is the length of the input
string. The subsequent arithmetic operations and comparisons involve a constant number of operations and can be
considered O(1).

Therefore, the overall time complexity of the `myAtoi` method can be approximated as O(n), where n is the length of the
input string.

## Space Complexity

The space complexity of the `myAtoi` method is determined by the additional variables used in the method. These
variables include the `$integer` variable used to store the converted integer value. Since these variables hold only
integer values, the space complexity can be considered O(1), constant space usage.