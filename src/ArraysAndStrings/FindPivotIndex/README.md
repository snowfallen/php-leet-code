# [Find Pivot Index](https://leetcode.com/explore/learn/card/array-and-string/201/introduction-to-array/1144/)

## Arrays and strings

Given an array of integers `nums`, calculate the pivot index of this array.

The pivot index is the index where the sum of all the numbers strictly to the left of the index is equal to the sum of
all the numbers strictly to the index's right.

If the index is on the left edge of the array, then the left sum is `0` because there are no elements to the left. This
also applies to the right edge of the array.

Return the leftmost pivot index. If no such index exists, return `-1`.

### ***Example 1:***

````
Input: nums = [1,7,3,6,5,6]
Output: 3
Explanation:
The pivot index is 3.
Left sum = nums[0] + nums[1] + nums[2] = 1 + 7 + 3 = 11
Right sum = nums[4] + nums[5] = 5 + 6 = 11
````

### ***Example 2:***

```
Input: nums = [1,2,3]
Output: -1
Explanation:
There is no index that satisfies the conditions in the problem statement.
```

### ***Example 3:***

```
Input: nums = [2,1,-1]
Output: 0
Explanation:
The pivot index is 0.
Left sum = 0 (no elements to the left of index 0)
Right sum = nums[1] + nums[2] = 1 + -1 = 0
```

Note: This question is the same as 1991: https://leetcode.com/problems/find-the-middle-index-in-array/

### Solution

The `pivotIndex` function takes an array of integers as input and returns the index of the pivot point. If no pivot
point is found, it returns `-1`.

```php
/**
 * @param int[] $nums The input array of integers.
 * @return int The index of the pivot point, or -1 if not found.
 */
public function pivotIndex(array $nums): int
{
    // Implementation details...
}
```

## Example

```php

$nums = [1, 7, 3, 6, 5, 6];
$pivotFinder = new PivotFinder();
$pivotIndex = $pivotFinder->pivotIndex($nums);
if ($pivotIndex !== -1) {
    echo "Pivot index is: $pivotIndex";
} else {
    echo "No pivot index found.";
}
```

In this example, given the input array `[1, 7, 3, 6, 5, 6]`, the pivot index is found to be `3`, since the sum of
elements `[1, 7, 3]` equals the sum of elements `[5, 6]`.

## Algorithm

The function calculates the sum of all elements in the array and then iterates through the array to find the pivot
index. It maintains a `leftSum` variable that accumulates the sum of elements to the left of the current index. At each
step, it checks whether the sum of elements to the right is equal to the sum of elements to the left. If a pivot index
is found, it is returned immediately; otherwise, `-1` is returned if no pivot index is found.

## Time Complexity

The algorithm's time complexity is O(n), where n is the number of elements in the input array. This is because we
traverse the array twice: once to calculate the total sum and another time to find the pivot index. The space complexity
is O(1), as we only use a constant amount of extra space regardless of the input size.
