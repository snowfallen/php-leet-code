# [Plus One](https://leetcode.com/explore/learn/card/array-and-string/201/introduction-to-array/1148/)

## Arrays and strings

You are given a large integer represented as an integer array `numbers`, where each `numbers[i]` is the `i^th` number of
the
integer. The numbers are ordered from most significant to least significant in left-to-right order. The large integer
does not contain any leading `0's`.

Increment the large integer by one and return the resulting array of numbers.

### ***Example 1:***

```
Input: numbers = [1,2,3]
Output: [1,2,4]
Explanation: The array represents the integer 123.
Incrementing by one gives 123 + 1 = 124.
Thus, the result should be [1,2,4].
```

### ***Example 2:***

```
Input: numbers = [4,3,2,1]
Output: [4,3,2,2]
Explanation: The array represents the integer 4321.
Incrementing by one gives 4321 + 1 = 4322.
Thus, the result should be [4,3,2,2].
```

### ***Example 3:***

```
Input: digits = [9]
Output: [1,0]
Explanation: The array represents the integer 9.
Incrementing by one gives 9 + 1 = 10.
Thus, the result should be [1,0].
```

### Solution

Algorithm:

1. Initialize a carry variable to 1. This is because we want to add 1 to the input number.
2. Create an empty result array to store the digits of the incremented number.
3. Iterate through the input array in reverse order using a `foreach` loop.
4. For each digit (element) in the input array:
   a. Add the carry to the current digit.
   b. Calculate the new carry by integer division of the sum by 10.
   c. Append the last digit of the sum (obtained using modulo 10) to the result array.
5. After the loop, if there is still a carry (carry > 0), add it as the most significant digit of the result array.
6. Reverse the result array to get the final incremented number in the correct order.
7. Return the result array.

Time Complexity:
The time complexity of this algorithm is O(n), where n is the number of digits in the input array. This is because we
iterate through the input array once.

Space Complexity:
The space complexity of this algorithm is O(n), where n is the number of digits in the input array. This space is
primarily used to store the result array, which can be the same size as the input array in the worst case (e.g., when
the input represents the number 999, and the result is 1000). The space complexity is linear with respect to the input
size.