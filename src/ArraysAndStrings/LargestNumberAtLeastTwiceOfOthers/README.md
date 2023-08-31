# [Largest Number At Least Twice of Others](https://leetcode.com/explore/learn/card/array-and-string/201/introduction-to-array/1147/)

## Arrays and strings

You are given an integer array `numbers` where the largest integer is unique.

Determine whether the largest element in the array is ***at least twice*** as much as every other number in the array.
If it
is, return the index of the largest element, or return `-1` otherwise.

### ***Example 1:***

```
Input: nums = [3,6,1,0]
Output: 1
Explanation: 6 is the largest integer.
For every other number in the array x, 6 is at least twice as big as x.
The index of value 6 is 1, so we return 1.
```

### ***Example 2:***

```
Input: nums = [1,2,3,4]
Output: -1
Explanation: 4 is less than twice the value of 3, so we return -1.
```

### Solution

The method `dominantIndex` takes an array of integers as input and returns an integer representing the index of the
dominant element. It follows these steps:

1. A copy of the input array is created and sorted in ascending order.
2. The largest number is obtained by removing the last element from the sorted array.
3. The index of the largest number in the original array is found using `array_search`.
4. The second largest number is obtained by removing the last element from the sorted array.
5. The condition `$maxNumber / $lastNumber < 2` checks if the largest number is at least twice as much as the second
   largest
   number. If this condition is met, the index of the largest number is returned; otherwise, `-1` is returned.