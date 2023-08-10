# Remove Duplicates From Sorted Array https://leetcode.com/problems/remove-duplicates-from-sorted-array/description/

## Easy

### Problem Description

Given an integer array `nums` sorted in non-decreasing order, remove the duplicates in-place such that each unique
element
appears only once. The relative order of the elements should be kept the same. Then return the number of unique elements
in `nums`. Consider the number of unique elements of `nums` to be `k`, to get accepted, you need to do the following
things:

* Change the array `nums` such that the first `k` elements of nums contain the unique elements in the order they were
  present
  in `nums` initially. The remaining elements of `nums` are not important as well as the size of `nums`.
* Return `k`.

***Example 1:***

```
Input: nums = [1,1,2]
Output: 2, nums = [1,2,_]
Explanation: Your function should return k = 2, with the first two elements of nums being 1 and 2 respectively.
It does not matter what you leave beyond the returned k (hence they are underscores).
```

***Example 2:***

```
Input: nums = [0,0,1,1,1,2,2,3,3,4]
Output: 5, nums = [0,1,2,3,4,_,_,_,_,_]
Explanation: Your function should return k = 5, with the first five elements of nums being 0, 1, 2, 3, and 4 respectively.
It does not matter what you leave beyond the returned k (hence they are underscores).
```

### Constraints:

* `1 <= nums.length <= 3 * 104`
* `-100 <= nums[i] <= 100`
* `nums` is sorted in non-decreasing order.

### Solution

The `removeDuplicates` function takes a sorted array of integers `$numbers` as input and removes duplicates from the
array
in-place while returning the new length of the array.

1. The function uses the `array_unique` function to remove duplicates from the input array. This function returns an
   array containing only the unique elements while maintaining their original order.

2. The function assigns the array returned by `array_unique` back to the `$numbers` input array, effectively modifying
   it
   in-place.

3. The function then returns the count of elements in the modified `$numbers` array, which represents the new length of
   the array without duplicates.

## Example

```php
$numbers = [1, 1, 2];
$remover = new RemoveDuplicates();
$result = $remover->removeDuplicates($numbers);
echo $result; // Output: 2
print_r($numbers); // Output: [1, 2]
```

## Time Complexity

The time complexity of the `removeDuplicates` function is determined by the `array_unique` function, which has a linear
time complexity proportional to the number of elements in the input array. Thus, the overall time complexity of the
function is O(n), where n is the length of the input array.

## Space Complexity

The space complexity of the function is determined by the space used by the `array_unique` function to store the
temporary set of unique elements. In the worst case, where all elements are unique, the space complexity is O(n), where
n
is the length of the input array. However, since the requirement is to modify the input array in-place, the space
complexity can be considered O(1) because the additional space used is not proportional to the size of the input.
