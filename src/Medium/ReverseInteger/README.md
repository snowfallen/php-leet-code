# Reverse Integer https://leetcode.com/problems/reverse-integer/description/

## Medium

Given a signed 32-bit integer `number`, return `number` with its digits reversed. If reversing `number` causes the value
to go outside the
signed 32-bit integer range `[-231, 231 - 1]`, then return `0`.

Assume the environment does not allow you to store 64-bit integers (signed or unsigned).

### Example 1:

```
Input: number = 123
Output: 321
```

### Example 2:

```
Input: number = -123
Output: -321
```

### Example 3:

```
Input: number = 120
Output: 21
```

### Constraints:

* `-231 <= x <= 231 - 1`

### Solution:

## Usage

```php
use PhpLeetCode\Medium\ReverseInteger\ReverseInteger;

$reverseInteger = new ReverseInteger();
$originalNumber = 12345;
$reversedNumber = $reverseInteger->reverse($originalNumber);

echo "Original Number: $originalNumber\n";
echo "Reversed Number: $reversedNumber\n";
```

## Method

### `reverse(int $number): int`

This method takes an integer as input and returns the reversed integer within the 32-bit signed integer range. If the
reversed integer is outside this range, it returns 0.

- **Parameters:**
    - `$number` (int): The integer to be reversed.

- **Returns:**
    - (int): The reversed integer if within the 32-bit signed integer range; otherwise, 0.

## Algorithm

1. Initialize the variables:
    - `$reversedNumber` to store the reversed integer (initially set to 0).
    - `$absNumber` to store the absolute value of the input number.

2. While `$absNumber` is greater than 0:
    - Calculate the last digit of `$absNumber` using the modulo operator (%).
    - Append the last digit to `$reversedNumber` by multiplying it by 10 and adding the last digit.
    - Remove the last digit from `$absNumber` by performing an integer division (/) by 10.

3. If the original input number was negative, multiply `$reversedNumber` by -1 to retain the negative sign.

4. Check if the reversed number is within the 32-bit signed integer range (between -2^31 and 2^31 - 1):
    - If it is within the range, return the `$reversedNumber`.
    - If it is outside the range, return 0.

## Complexity Analysis

- Time Complexity: O(log10 N), where N is the absolute value of the input number. The algorithm iterates through the
  digits of the input number, and the number of iterations is proportional to the number of digits in the input.

- Space Complexity: O(1). The algorithm uses a constant amount of additional space to store variables regardless of the
  input size.