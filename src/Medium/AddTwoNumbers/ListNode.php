<?php

namespace PhpLeetCode\Medium\AddTwoNumbers;

class ListNode
{
    public int $value;
    public ?ListNode $nextNode;

    /**
     * @param int $value
     * @param ?ListNode $nextNode
     */
    public function __construct(int $value = 0, ?ListNode $nextNode = null)
    {
        $this->value = $value;
        $this->nextNode = $nextNode;
    }
}
