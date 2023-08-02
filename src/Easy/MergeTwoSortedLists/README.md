# 21. Merge Two Sorted Lists https://leetcode.com/problems/merge-two-sorted-lists/description/

You are given the heads of two sorted linked lists `list1` and `list2`.

Merge the two lists into one sorted list. The list should be made by splicing together the nodes of the first two lists.

Return the head of the merged linked list.

```
Input: list1 = [1,2,4], list2 = [1,3,4]
Output: [1,1,2,3,4,4]
```

```
Input: list1 = [], list2 = []
Output: []
```

```
Input: list1 = [], list2 = [0]
Output: [0]
```

### Constraints:

* The number of nodes in both lists is in the range `[0, 50]`.
* `-100 <= Node.val <= 100`
* Both `list1` and `list2` are sorted in non-decreasing order.

### Solution

The `mergeTwoLists` function takes two linked lists as input: `$list1` and `$list2`, where each list is represented by
a `ListNode` object. The function merges the two sorted lists in ascending order and returns the merged list.

1. The function first checks if either of the input linked lists is empty (`null`). If one of the lists is empty, it
   immediately returns the other non-empty list, as merging with an empty list is equivalent to returning the non-empty
   list.

2. The function then compares the values of the current nodes in `$list1` and `$list2`. If the value of the current node
   in `$list1` is less than the value of the current node in `$list2`, it means the current node from `$list1` should
   come first in the merged list. Therefore, the function sets the `next` pointer of the current node in `$list1` to the
   result of a recursive call to `mergeTwoLists` with the next node in `$list1` and the current node in `$list2`.

3. If the value of the current node in `$list2` is less than or equal to the value of the current node in `$list1`, it
   means the current node from `$list2` should come first in the merged list. Therefore, the function sets the `next`
   pointer of the current node in `$list2` to the result of a recursive call to `mergeTwoLists` with the next node
   in `$list2` and the current node in `$list1`.

4. The function continues this process of merging nodes until it reaches the end of one of the linked lists.

5. Finally, the function returns the merged list, which is the modified version of one of the input lists.
