# [Diagonal Traverse](https://leetcode.com/problems/diagonal-traverse/description/)

## Medium

Given an `rows x column` matrix, return an array of all the elements of the array in a diagonal order.

### ***Example 1:***

```
Input: mat = [[1,2,3],[4,5,6],[7,8,9]]
Output: [1,2,4,7,5,3,6,8,9]
```

### ***Example 2:***

```
Input: mat = [[1,2],[3,4]]
Output: [1,2,3,4]
```

### Solution:

The algorithm used in this code is based on a loop that iterates through all possible diagonal sums of the matrix. The diagonal sum represents the sum of row and column indices for elements in the same diagonal. The loop proceeds as follows:

1. Initialize an empty array `$result` to store the elements in diagonal order.
2. Loop through diagonal sums from 0 to `$rows + $column - 1` (inclusive). This ensures that all diagonals are covered.
3. Inside the loop, check if the current diagonal sum is even or odd.
    - If the diagonal sum is even:
        - Initialize two variables, `$i` and `$j`, with their minimum possible values to start from the top of the diagonal.
        - While `$j` is within the column bounds and `$i` is within the row bounds, add the element at `$matrix[$i][$j]` to the `$result` array and move to the next element in the diagonal by decrementing `$j` and incrementing `$i`.
    - If the diagonal sum is odd:
        - Initialize `$i` and `$j` as before but this time starting from the bottom of the diagonal.
        - While `$j` is within the column bounds and `$i` is within the row bounds, add the element at `$matrix[$i][$j]` to the `$result` array and move to the next element in the diagonal by incrementing `$j` and decrementing `$i`.
4. Continue this process for all diagonal sums.
5. Finally, return the `$result` array containing the matrix elements in diagonal order.

## Time Complexity

The time complexity of this algorithm is O(m * n), where:
- `m` is the number of rows in the matrix.
- `n` is the number of columns in the matrix.

This is because the code iterates through all elements in the matrix once to construct the diagonal order traversal.

## Space Complexity

The space complexity is O(m * n) as well because the `$result` array stores all elements of the matrix in diagonal order, and in the worst case, this array will have the same number of elements as the input matrix.
