<?php

namespace PhpLeetCode\Medium\AddTwoNumbers;

class AddTwoNumbers
{
    /**
     * @param ListNode $firstNode
     * @param ListNode $secondNode
     * @return ListNode
     */
    final public function addTwoNumbers(ListNode $firstNode, ListNode $secondNode): ListNode
    {
        $head = new ListNode();
        $currentNode = $head;
        $carry = 0;

        while ($firstNode !== null || $secondNode !== null) {
            $x = $firstNode !== null ? $firstNode->value : 0;
            $y = $secondNode !== null ? $secondNode->value : 0;
            $sum = $x + $y + $carry;

            $carry = intdiv($sum, 10);
            $currentNode->nextNode = new ListNode($sum % 10);
            $currentNode = $currentNode->nextNode;

            if ($firstNode !== null) $firstNode = $firstNode->nextNode;
            if ($secondNode !== null) $secondNode = $secondNode->nextNode;
        }

        if ($carry > 0) {
            $currentNode->nextNode = new ListNode($carry);
        }

        return $head->nextNode;
    }
}
