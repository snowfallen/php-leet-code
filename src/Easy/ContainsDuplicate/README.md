# Contains Duplicate https://leetcode.com/problems/contains-duplicate/

Given an integer array `nums`, return `true` if any value appears at least twice in the array, and return `false` if
every
element is distinct.

```
Input: nums = [1,2,3,1]
Output: true
```

```
Input: nums = [1,2,3,4]
Output: false
```

```
Input: nums = [1,1,1,3,3,4,3,2,4,2]
Output: true
```

### Constraints:

* `1 <= nums.length <= 10^5`
* `-10^9 <= nums[i] <= 10^9`

### Solution

The `containsDuplicate` function takes an array of integers `$nums` as input and returns a boolean value indicating
whether the array contains any duplicate elements.

1. The function uses the `array_unique` function to remove duplicate elements from the array `$nums`.
2. It then compares the count of unique elements with the count of the original array.
3. If the count of unique elements is not equal to the count of the original array, it means there are duplicate
   elements, and the function returns `true`.
4. Otherwise, if the counts are equal, it means there are no duplicates, and the function returns `false`.

## Example

```
$nums = [1, 2, 3, 4, 1];
$containsDuplicate = new ContaintsDuplicate();
$result = $containsDuplicate->containsDuplicate($nums);
echo $result; // Output: true
```

```
$nums = [1, 2, 3, 4, 5];
$containsDuplicate = new ContaintsDuplicate();
$result = $containsDuplicate->containsDuplicate($nums);
echo $result; // Output: false
```

## Time Complexity

The time complexity of the `containsDuplicate` function is O(n), where n is the number of elements in the input
array `$nums`. This is because the `array_unique` function has a linear time complexity in the number of elements in the
array.
