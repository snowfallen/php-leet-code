# 1. Two Sum https://leetcode.com/problems/two-sum/description/
Given an array of integers `nums` and an integer `target`, return indices of the two numbers such that they add up to `target`.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.
```
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
```
```
Input: nums = [3,2,4], target = 6
Output: [1,2]
```
```
Input: nums = [3,3], target = 6
Output: [0,1]
```
### Constraints:
* `2 <= nums.length <= 104`
* `-109 <= nums[i] <= 109`
* `-109 <= target <= 109`

### Solution
I decided to use a map (associative array) to find pairs that give us the target number. As we know from mathematics:
```
a + b = c 
c - a = b
c - b = a
```
So, if we subtract a number from the target number, we will get the first number from this pair, and we put this number into the map as a key. When the number becomes equal to any key in the map, it means we have found the second number from the pair.
```
nums = [2, 7, 11, 15];
[key] => value;
array(4) {
  [0]=>
  int(2)
  [1]=>
  int(7)
  [2]=>
  int(11)
  [3]=>
  int(15)
}
target = [9];
map = [];
```
The first step is to check if the current number (num) is equal to any key in the map. If it is, we return map[num] (where map[num] represents the index of the first number) and the index of the current num. Otherwise, we must put target - num as a key and num's index as the value in the map. (num is an element of the nums array).
```
$map = [];    
    foreach ($nums as $numIndex => $num) {
         if (isset($map[$num])) {
         return [$map[$num], $numIndex];
         }

        $map += [$target - $num => $numIndex];
    }
```
During the first iteration, we get:
```
map = [];
target = 9;
nums[index] => nums[0] = 2;

map += [targer - nums[index] => index];
map += [9 - 2 => 0] ===> map = [[7 => 0]];
```
Since the map was empty, we added the first pair.
But during the second iteration:
```
map = [[7 => 0]];
target = 9;
nums[index] => nums[1] = 7;
```
And now `nums[index]` equal map key and this means that have got our pair.
This algorithm has O(n) time complexity and efficiently finds the indices of two numbers that add up to the target.