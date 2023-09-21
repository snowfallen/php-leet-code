# [Merge sorted array](https://leetcode.com/problems/merge-sorted-array/description/?envType=study-plan-v2&envId=top-interview-150)

## Easy

You are given two integer arrays `nums1` and `nums2`, sorted in non-decreasing order, and two integers `m` and `n`,
representing
the number of elements in `nums1` and `nums2` respectively.

Merge nums1 and nums2 into a single array sorted in non-decreasing order.

The final sorted array should not be returned by the function, but instead be stored inside the array `nums1`. To
accommodate this, `nums1` has a length of`m + n`, where the first `m` elements denote the elements that should be
merged, and
the last n elements are set to 0 and should be ignored. `nums2` has a length of `n`.

### ***Example 1:***

```
Input: nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3
Output: [1,2,2,3,5,6]
Explanation: The arrays we are merging are [1,2,3] and [2,5,6].
The result of the merge is [1,2,2,3,5,6] with the underlined elements coming from nums1.
```

### ***Example 2:***

```
Input: nums1 = [1], m = 1, nums2 = [], n = 0
Output: [1]
Explanation: The arrays we are merging are [1] and [].
The result of the merge is [1].
```

### ***Example 3:***

```
Input: nums1 = [0], m = 0, nums2 = [1], n = 1
Output: [1]
Explanation: The arrays we are merging are [] and [1].
The result of the merge is [1].
Note that because m = 0, there are no elements in nums1. The 0 is only there to ensure the merge result can fit in nums1.
```

### Solution

1. The function `merge` takes four parameters:
    - `&$nums1`: A reference to the first sorted array.
    - `$nums1Length`: The length of the first sorted array (`$nums1`).
    - `$nums2`: The second sorted array to merge into `$nums1`.
    - `$nums2Length`: The length of the second sorted array (`$nums2`).

2. It initializes three variables:
    - `$nums1End`: It holds the index of the last element in `$nums1`.
    - `$nums1Max`: It holds the index of the last element in the first sorted array (`$nums1`).
    - `$nums2Max`: It holds the index of the last element in the second sorted array (`$nums2`).

3. The code enters a `while` loop that runs as long as there are elements in `$nums2` to merge.

4. Inside the loop, it compares the last elements of both arrays:
    - If the last element of `$nums1` (at index `$nums1Max`) is greater than the last element of `$nums2` (at
      index `$nums2Max`), it places the larger element at the end of `$nums1` (at index `$nums1End`) and
      decrements `$nums1Max`.
    - If the last element of `$nums2` is greater, it places that element at the end of `$nums1` and
      decrements `$nums2Max`.

5. After placing an element from either array into `$nums1`, it decrements `$nums1End` to move to the next position
   in `$nums1`.

6. The loop continues until all elements from `$nums2` have been merged into `$nums1`.

7. Finally, the function returns the merged and sorted array `$nums1`.
