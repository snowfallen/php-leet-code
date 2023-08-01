# 20. Valid Parentheses https://leetcode.com/problems/valid-parentheses/description/

Given a string parentheses containing just the characters `'(', ')', '{', '}', '[' and ']'`, determine if the input
string is valid.

An input string is valid if:

1. Open brackets must be closed by the same type of brackets.
2. Open brackets must be closed in the correct order.
3. Every close bracket has a corresponding open bracket of the same type.

```
Input: parentheses = "()"
Output: true
```

```
Input: parentheses = "()[]{}"
Output: true
```

```
Input: parentheses = "(]"
Output: false
```

### Constraints:

* `1 <= parentheses.length <= 104`
* string consists of parentheses only `()[]{}`.

### Solution

1. The function first checks if the length of the input `$parentheses` is odd. If it is odd, it immediately
   returns `false`, as an odd-length string cannot contain valid parentheses pairs.

2. The function initializes an associative array `$bracketSet` that maps each opening bracket (parenthesis) to its
   corresponding closing bracket. For example, `'(' => ')'`, `'[' => ']'`, and `'{' => '}'`.

3. The function also creates an empty array `$bracketStack` to act as a stack for storing the opening brackets
   encountered in the input string.

4. The function then iterates through each character of the input string using a for loop.

5. For each character, the function checks if it is an opening bracket by
   using `array_key_exists($parentheses[$i], $bracketSet)`. If it is an opening bracket, it pushes the corresponding
   closing bracket onto the `$bracketStack` array.

6. If the character is not an opening bracket, it means it must be a closing bracket. The function compares it with the
   last element in the `$bracketStack` array (popped using `array_pop`). If they do not match, it means the closing
   bracket is not paired with the corresponding opening bracket, and the function immediately returns `false`.

7. The function continues this process until it has checked all characters in the input string.

8. After the loop finishes, if the `$bracketStack` array is empty, it means all the opening brackets were correctly
   matched with their corresponding closing brackets, and the function returns `true`. Otherwise, it returns `false`.