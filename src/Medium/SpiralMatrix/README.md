# [Spiral Matrix](https://leetcode.com/problems/spiral-matrix/description/)

## Medium

Given an `m` x `n` matrix, return all elements of the `matrix` in spiral order

### ***Example 1:***

```
Input: matrix = [[1,2,3],[4,5,6],[7,8,9]]
Output: [1,2,3,6,9,8,7,4,5]
```

### ***Example 2:***

```
Input: matrix = [[1,2,3,4],[5,6,7,8],[9,10,11,12]]
Output: [1,2,3,4,8,12,11,10,9,5,6,7]
```

### Solution:

The algorithm for traversing a 2D matrix in a spiral order follows these steps:

1. Initialize four variables:
    - `$xStartPosition`: The starting row index.
    - `$yStartPosition`: The starting column index.
    - `$xEndPosition`: The ending row index.
    - `$yEndPosition`: The ending column index.

2. Initialize an empty array (`$spiralMatrixInterpretation`) to store the elements in spiral order.

3. Use a while loop that continues until the starting row index (`$xStartPosition`) is less than or equal to the ending
   row index (`$xEndPosition`) and the starting column index (`$yStartPosition`) is less than or equal to the ending
   column index (`$yEndPosition`).

4. Inside the loop, perform the following steps:
    - Traverse from left to right: Iterate through the row from `$yStartPosition` to `$yEndPosition`, adding each
      element to `$spiralMatrixInterpretation`.
    - Increment `$xStartPosition` to move to the next row.

    - Traverse from top to bottom: Iterate through the column from `$xStartPosition` to `$xEndPosition`, adding each
      element to `$spiralMatrixInterpretation`.
    - Decrement `$yEndPosition` to move to the previous column.

    - Check if there are more rows to traverse (`$xStartPosition <= $xEndPosition`). If true, traverse from right to
      left: Iterate through the row from `$yEndPosition` to `$yStartPosition`, adding each element
      to `$spiralMatrixInterpretation`.
    - Decrement `$xEndPosition` to move to the previous row.

    - Check if there are more columns to traverse (`$yStartPosition <= $yEndPosition`). If true, traverse from bottom to
      top: Iterate through the column from `$xEndPosition` to `$xStartPosition`, adding each element
      to `$spiralMatrixInterpretation`.
    - Increment `$yStartPosition` to move to the next column.

5. Continue this process until all elements in the matrix are added to `$spiralMatrixInterpretation`.

6. Return the final `$spiralMatrixInterpretation` array, which contains the elements of the matrix in spiral order.

## Time Complexity

The time complexity of this algorithm is O(m * n), where 'm' is the number of rows in the matrix, and 'n' is the number
of columns in the matrix. This is because we visit each element of the matrix exactly once.

## Space Complexity

The space complexity of this algorithm is O(1) or constant space. It uses only a fixed amount of additional memory to
store the variables and the output array, and the space requirements do not depend on the size of the input matrix.

## Usage

You can use the `spiralOrder` method by calling it with a 2D matrix as an argument. It will return an array containing
the matrix elements in spiral order.

Example:

```php
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$result = spiralOrder($matrix);
print_r($result); // Output: [1, 2, 3, 6, 9, 8, 7, 4, 5]
```