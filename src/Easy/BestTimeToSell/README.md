# [Best time to buy and sell stocks](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/description/)

### Easy

You are given an array prices where `prices[i]` is the price of a given stock on the ith day.

You want to maximize your profit by choosing a single day to buy one stock and choosing a different day in the future to
sell that stock.

Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return `0`.

### ***Example 1:***

```
Input: prices = [7,1,5,3,6,4]
Output: 5
Explanation: Buy on day 2 (price = 1) and sell on day 5 (price = 6), profit = 6-1 = 5.
Note that buying on day 2 and selling on day 1 is not allowed because you must buy before you sell.
```

### ***Example 2:***

```
Input: prices = [7,6,4,3,1]
Output: 0
Explanation: In this case, no transactions are done and the max profit = 0.
```

### Solution:

The algorithm follows a simple logic to find the maximum profit:

1. Initialize two variables:
    - `$minPrice`: To keep track of the minimum stock price seen so far.
    - `$maxProfit`: To store the maximum profit that can be obtained.

2. Loop through the array of stock prices:
    - For each price, update `$minPrice` to be the minimum of the current price and `$minPrice`.
    - Calculate the profit that can be obtained by selling the stock at the current price (i.e., `$price - $minPrice`).
    - Update `$maxProfit` to be the maximum of the calculated profit and the current `$maxProfit`.

3. After iterating through all the prices, `$maxProfit` will hold the maximum profit that can be obtained by buying and
   selling the stock.

## Time Complexity

The time complexity of this algorithm is O(n), where 'n' is the number of stock prices in the input array. This is
because we traverse the array once, performing constant-time operations for each price.

## Space Complexity

The space complexity of this algorithm is O(1), as it uses only a constant amount of additional space to store the
variables `$minPrice` and `$maxProfit`.


