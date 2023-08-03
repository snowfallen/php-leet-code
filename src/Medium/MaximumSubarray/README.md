# 53 Maximum Subarray https://leetcode.com/problems/maximum-subarray/

Given an integer array `nums`, find the
subarray
with the largest `sum`, and return its `sum`.

```
Input: nums = [-2,1,-3,4,-1,2,1,-5,4]
Output: 6
Explanation: The subarray [4,-1,2,1] has the largest sum 6.
```

```
Input: nums = [1]
Output: 1
Explanation: The subarray [1] has the largest sum 1.
```

```
Input: nums = [5,4,-1,7,8]
Output: 23
Explanation: The subarray [5,4,-1,7,8] has the largest sum 23.
```

### Constraints:

* `1 <= nums.length <= 105`
* `-10^4 <= nums[i] <= 10^4`

### Solution

The `maxSubArray` function takes an integer array `$nums` as input and returns the sum of the contiguous subarray with
the largest sum.

1. The function initializes two variables:

* `$currentSum`: This variable keeps track of the sum of the current subarray being considered.
* `$maxSum`: This variable stores the maximum sum found so far and is initialized with the first element of the
  array `$nums`.

2. The function then iterates through each element of the array `$nums` using a foreach loop.
3. For each element, the function calculates the current sum by taking the maximum value between the sum of the previous
   subarray and the current element `$num` (`$currentSum` + `$num`) and just the current element `$num`. This is done
   using the max
   function.
4. After calculating the current sum, the function updates the $maxSum by taking the maximum value between the current
   maximum sum and the current sum.
5. The loop continues this process for each element in the array, ensuring that $maxSum eventually contains the sum of
   the
   largest subarray.
6. Finally, the function returns the `$maxSum` as the result.
