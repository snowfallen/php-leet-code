# Add Two Numbers https://leetcode.com/problems/add-two-numbers/

## Medium

You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order,
and each of their nodes contains a single digit. Add the two numbers and return the sum as a linked list.

You may assume the two numbers do not contain any leading zero, except the number 0 itself.

```
Input: l1 = [2,4,3], l2 = [5,6,4]
Output: [7,0,8]
Explanation: 342 + 465 = 807.
```

```
Input: l1 = [0], l2 = [0]
Output: [0]
```

```
Input: l1 = [9,9,9,9,9,9,9], l2 = [9,9,9,9]
Output: [8,9,9,9,0,0,0,1]
```

### Constraints:

* The number of nodes in each linked list is in the range `[1, 100]`.
* `0 <= Node.val <= 9`
* It is guaranteed that the list represents a number that does not have leading zeros.

### Solution

The `addTwoNumbers` function takes two linked lists `firstNode` and `secondNode` as input and returns the sum of the
numbers represented by the linked lists.

1. The function initializes the `head` node as a placeholder for the result linked list. The `currentNode` variable is
   also initialized to `head`.

2. A `carry` variable is used to handle cases where the sum of two digits is greater than or equal to 10. It starts with
   a value of 0.

3. A `while` loop iterates as long as either of the input linked lists is not null.

4. Inside the loop, the function retrieves the values `x` and `y` from the current nodes of the linked lists. If the
   linked lists are exhausted, the value is considered 0.

5. The sum of `x`, `y`, and the carry is calculated. The carry is then updated to hold the quotient of the sum divided
   by 10.

6. The sum modulo 10 is added as a new node to the `currentNode`'s `nextNode`, creating the result linked list as digits
   are added.

7. The `currentNode` is moved to the newly added node.

8. If the input linked lists are not exhausted, they are moved to their respective next nodes.

9. After the loop finishes, if there's a carry left, it's added as a new node to the result linked list.

10. The result linked list starts from the `head`'s `nextNode`, as the `head` was used as a placeholder.

11. The function returns the result linked list.

The time complexity of this function is `O(max(n, m))`, where n and m are the lengths of the input linked lists. This is
because each node in the longer linked list is visited once, and there are at most `max(n, m)` nodes in the result
linked
list.