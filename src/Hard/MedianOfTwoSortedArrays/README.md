# Median of Two Sorted Arrays https://leetcode.com/problems/median-of-two-sorted-arrays/

## Hard

Given two sorted arrays `nums1` and `nums2` of size m and n respectively, return the median of the two sorted arrays.

The overall run time complexity should be `O(log (m+n))`.

```
Input: nums1 = [1,3], nums2 = [2]
Output: 2.00000
Explanation: merged array = [1,2,3] and median is 2.
```

```
Input: nums1 = [1,2], nums2 = [3,4]
Output: 2.50000
Explanation: merged array = [1,2,3,4] and median is (2 + 3) / 2 = 2.5.
```

### Constraints:

* `nums1.length == m`
* `nums2.length == n`
* `0 <= m <= 1000`
* `0 <= n <= 1000`
* `1 <= m + n <= 2000`
* `-10^6 <= nums1[i], nums2[i] <= 10^6`

### Solution

The `findMedianSortedArrays` function takes two sorted arrays `$numbers` and `$numbers2` as input and returns the median
as a floating-point number.

1. The function first merges the two input arrays into a single sorted array using the `array_merge` function. This
   merged array contains all elements from both input arrays.

2. The total count of elements in the merged array is calculated using `count($mergedArrays)`.

3. The merged array is sorted using the `sort` function to ensure that the elements are in ascending order.

4. The indices for the left and right median elements are calculated. For an odd number of elements, the left and right
   median indices are the same, which corresponds to the middle element. For an even number of elements, the left median
   index is the middle-left element, and the right median index is the middle-right element.

5. The median is calculated based on whether the total count of elements is even or odd:
    - If the count is even, the median is the average of the left median element and the right median element.
    - If the count is odd, the median is the element at the middle index.

6. The calculated median is then returned as the result.

## Example

```php
$numbers = [1, 3];
$numbers2 = [2];
$medianFinder = new MedianOfTwoSortedArrays();
$result = $medianFinder->findMedianSortedArrays($numbers, $numbers2);
echo $result; // Output: 2.00000
```

## Time Complexity

The time complexity of the `findMedianSortedArrays` function is dominated by the sorting step, which has a time
complexity of O((n + m) log(n + m)), where n and m are the lengths of the input arrays `$numbers` and `$numbers2`. The
array merging step and the median calculation step both have linear time complexities.

## Space Complexity

The space complexity of the function is determined by the space used to store the merged array, which is O(n + m), where
n and m are the lengths of the input arrays. The sorting operation is performed in-place and does not contribute
significantly to the space complexity.
