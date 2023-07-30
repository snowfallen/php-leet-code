# 13. Roman to Integer

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
simply `X`

+ `II`. The number `27` is written as `XXVII`, which is `XX + V + II`.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not `IIII`.
Instead, the number four is written as `IV`. Because the one is before the five we subtract it making four. The same
principle applies to the number nine, which is written as `IX`. There are six instances where subtraction is used:

* `I` can be placed before `V` `(5)` and `X` `(10)` to make `4` and `9`.
* `X` can be placed before `L` `(50)` and `C` `(100)` to make `40` and `90`.
* `C` can be placed before `D` `(500)` and `M` `(1000)` to make `400` and `900`.

```
Input: romanNumber = "III"
Output: 3
Explanation: III = 3.
```

```
Input: romanNumber = "LVIII"
Output: 58
Explanation: L = 50, V= 5, III = 3.
```

```
Input: romanNumber = "MCMXCIV"
Output: 1994
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.
```

### Constraints

* `1 <= romanNumber.length <= 15`
* `romanNumber` contains only the characters `('I', 'V', 'X', 'L', 'C', 'D', 'M')`.
* It is guaranteed that s is a valid roman numeral in the range `[1, 3999]`.

### Solution

* The function first checks if the length of the input $romanNumber is less than `1`. If so, it returns 0, indicating an
  invalid input.
* An array $romanNumbers is created, which maps each Roman numeral character `(I, V, X, L, C, D, M)` to its
  corresponding integer value `(1, 5, 10, 50, 100, 500, 1000)`.
* The variable `$integerNumber` is initialized to `0`, which will be used to accumulate the resulting `integer` value.
* A for loop iterates through the characters of the Roman numeral `string`, except for the last character (since we
  handle it separately later).
* Within the loop, the function checks if the current Roman numeral character's value is less than the value of the next
  character. If so, it means a subtraction is needed, and the corresponding value is subtracted from `$integerNumber`.
* If the current Roman numeral character's value is greater than or equal to the value of the next character, it means
  an addition is needed, and the corresponding value is added to `$integerNumber`.
* If the current character is not present in the `$romanNumbers` array, it indicates an invalid Roman numeral, and the
  function returns `0`.
* After the loop finishes, we add the value of the last Roman numeral character (the one at the end of the string)
  to `$integerNumber`.
* The final calculated integer value is returned as the result.
