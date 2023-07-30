# 9. Palindrome Number https://leetcode.com/problems/palindrome-number/

Given an integer `x`, return `true` if `x` is a `palindrome`, and false otherwise.
Palindrome - An integer is a palindrome when it reads the same forward and backward.
For example, `121` is a palindrome while `123` is not.

```
Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.
```

```
Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
```

```
Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
```

Constraints:

* ` -2^31 <= x <= 2^31 - 1`

Follow up: Could you solve it without converting the integer to a string?

### Solution

1. We start by initializing two variables:

* `$tempNumber` : This variable temporarily stores the input number.
* `$reversedNumber` : This variable is used to store the reversed version of the input number and is initially set to 0.

2. A while loop is used to reverse the number:

* The loop runs as long as $tempNumber is greater than 0.
* In each iteration, the last digit of $tempNumber is extracted using $tempNumber % 10, and it is added to
  $reversedNumber after shifting the digits of $reversedNumber to the left by multiplying it with 10.
* After extracting the last digit, it is removed from $tempNumber by performing integer division by 10.

```
$tempNumber = 121;
$reversedNumber = 0;
while ($tempNumber > 0) {
    $reversedNumber = ($reversedNumber * 10) + ($tempNumber % 10);
    $tempNumber = (int)($tempNumber / 10);
}
During the firts iteration: 
$reversedNumber = ($reversedNumber * 10) + ($tempNumber % 10) => (0 * 10) + 1 = 0 + 1 = 1;
$tempNumber = (int)($tempNumber / 10) => 121 / 10 => 12.1 => (int)12.1 = 12;
During the second iteration:
$reversedNumber = ($reversedNumber * 10) + ($tempNumber % 10) => (1 * 10) + 2 = 10 + 2 = 12;
$tempNumber = (int)($tempNumber / 10) => 12 / 10 => 1.2 => (int)1.2 = 1;
During the third iteration:
$reversedNumber = ($reversedNumber * 10) + ($tempNumber % 10) => (12 * 10) + 1 = 120 + 1 = 121;
$tempNumber = (int)($tempNumber / 10) => 1 / 10 => 0.1 => (int)0.1 = 0; 
```

3. Once the loop finishes, `$reversedNumber` will represent the reversed version of the original input number.
4. The function returns true if the original number is equal to the reversed number, indicating that the input number is
   a palindrome. If they are not equal, the function returns false.
