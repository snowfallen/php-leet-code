# Remove Element https://leetcode.com/problems/remove-element/description/

## Easy

Given an integer array `numbers` and an integer `value`, remove all occurrences of val in `numbers` in-place. The order
of the
elements may be changed. Then return the `number` of elements in `numbers` which are not equal to `value`.

Consider the `number` of elements in `numbers` which are not equal to value be `k`, to get accepted, you need to do the
following
things:

* Change the array nums such that the first k elements of nums contain the elements which are not equal to value. The
  remaining elements of nums are not important as well as the size of nums.
* Return `k`.

### Example 1:

```
Input: nums = [3,2,2,3], val = 3
Output: 2, nums = [2,2,_,_]
Explanation: Your function should return k = 2, with the first two elements of nums being 2.
It does not matter what you leave beyond the returned k (hence they are underscores).
```

### Example 2:

```
Input: nums = [0,1,2,2,3,0,4,2], val = 2
Output: 5, nums = [0,1,4,0,3,_,_,_]
Explanation: Your function should return k = 5, with the first five elements of nums containing 0, 0, 1, 3, and 4.
Note that the five elements can be returned in any order.
It does not matter what you leave beyond the returned k (hence they are underscores).
```

### Constraints:

* `0 <= numbers.length <= 100`
* `0 <= numbers[i] <= 50`
* `0 <= value <= 100`

## Solution:

### `removeElement(array &$numbers, int $deletedValue): int`

This method takes in an array of integers (`$numbers`) and an integer value (`$deletedValue`). It removes all
occurrences of the specified value from the array and returns the count of remaining elements in the modified array.

#### Parameters

- `array &$numbers`: An array of integers from which the specified value should be removed. The array is passed by
  reference, allowing the method to modify the original array.

- `int $deletedValue`: The value that needs to be removed from the array.

#### Return Value

- `int`: The count of remaining elements in the modified array after removal.

## Usage

1. Include the `RemoveElement` class in your PHP project.

```php
use PhpLeetCode\Easy\RemoveElement\RemoveElement;

// Create an instance of RemoveElement
$removeElement = new RemoveElement();

// Example array
$numbers = [3, 2, 2, 3, 4, 5];
$deletedValue = 3;

// Remove occurrences of the specified value
$remainingCount = $removeElement->removeElement($numbers, $deletedValue);

// Output the modified array and the count of remaining elements
echo "Modified Array: " . implode(', ', $numbers) . "\n";
echo "Remaining Count: " . $remainingCount . "\n";
```

## Time Complexity

The time complexity of the `removeElement` method is determined by the time complexity of the `array_diff` function,
which is O(m * n), where m is the number of elements in the `$numbers` array and n is the number of elements in
the `$deletedValue` array (in this case, a single element). This is because the function needs to compare each element
in `$numbers` with the single `$deletedValue`.

## Space Complexity

The space complexity of the `removeElement` method is O(m), where m is the number of elements in the `$numbers` array.
This is because the `array_diff` function creates a new array to store the elements that are not equal to
the `$deletedValue`, and the size of this new array depends on the number of elements in `$numbers`.
