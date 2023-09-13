# [Integer to Roman](https://leetcode.com/problems/integer-to-roman/description/)

## Medium

Roman numerals are represented by seven different symbols: `I, V, X, L, C, D` and `M`.

```
Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
```

For example, `2` is written as `II` in Roman numeral, just two ones added together. `12` is written as `XII`, which is
simply `X` + `II`. The number `27` is written as `XXVII`, which is `XX + V + II`.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not `IIII`.
Instead, the number four is written as `IV`. Because the one is before the five we subtract it making four. The same
principle applies to the number nine, which is written as `IX`. There are six instances where subtraction is used:

* `I` can be placed before `V` `(5)` and `X` `(10)` to make `4` and `9`.
* `X` can be placed before `L` `(50)` and `C` `(100)` to make `40` and `90`.
* `C` can be placed before `D` `(500)` and `M` `(1000)` to make `400` and `900`.

Given an integer, convert it to a roman numeral.

### ***Example 1:***

```
Input: num = 3
Output: "III"
Explanation: 3 is represented as 3 ones.
```

### ***Example 2:***

```
Input: num = 58
Output: "LVIII"
Explanation: L = 50, V = 5, III = 3.
```

### ***Example 3:***

```
Input: num = 1994
Output: "MCMXCIV"
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
```

### Solution:

The algorithm for converting an integer to a Roman numeral follows these steps:

1. Create an associative array `$romanNumerals` that maps Roman numerals to their integer values. The array contains Roman
numeral symbols as keys and their corresponding numeric values as values.
2. Initialize an empty string `$romanNumber` to store the resulting Roman numeral.
3. Iterate through the `$romanNumerals` array in descending order based on the numeric values of the Roman numerals.
4. For each Roman numeral `$roman` and its corresponding numeric value `$value`:
* While the input integer `$number` is greater than or equal to the current `$value`, add the Roman numeral to the
`$romanNumber` string and subtract the `$value` from the `$number`. This step ensures that the Roman numeral representation is
constructed from the largest possible Roman numerals.
5. Repeat this process for all Roman numeral symbols in the `$romanNumerals` array.
6. Return the final `$romanNumber` string, which represents the Roman numeral equivalent of the input integer.
