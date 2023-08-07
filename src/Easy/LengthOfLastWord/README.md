# Length of last word https://leetcode.com/problems/length-of-last-word/description/

Given a string consisting of words and spaces, return the length of the last word in the string.

A word is a maximal substring consisting of non-space characters only.

```
Input: string = "Hello World"
Output: 5
Explanation: The last word is "World" with length 5.
```

```
Input: string = "   fly me   to   the moon  "
Output: 4
Explanation: The last word is "moon" with length 4.
```

```
Input: string = "luffy is still joyboy"
Output: 6
Explanation: The last word is "joyboy" with length 6.
```

### Constraints:

* `1 <= string.length <= 104`
* `string` consists of only English letters and spaces `' '`.
* There will be at least one word in `string`.

### Solution:

The `lengthOfLastWord` function takes a string `$string` as input and returns the length of the last word in the string.
Here's a brief explanation of the code:

1. The function initializes a variable `$count` to keep track of the length of the last word.

2. It uses a for loop to iterate through the characters of the input string in reverse order, starting from the end of
   the string.

3. Inside the loop, it checks if the current character is not a space character (`" "`). If it's not a space character,
   it means a character of the last word is found, so the `$count` is incremented.

4. If the current character is a space and the `$count` is greater than 0, it means the last word has ended, and the
   loop breaks.

5. After the loop finishes, the function returns the value of `$count`, which represents the length of the last word.

The time complexity of the function is O(n), where n is the length of the input string, as it iterates through the
string once.
