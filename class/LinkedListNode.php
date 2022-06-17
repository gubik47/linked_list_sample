<?php

class LinkedListNode
{
    private int $value;
    private ?LinkedListNode $next = null;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getNext(): ?LinkedListNode
    {
        return $this->next;
    }

    public function setNext(?LinkedListNode $next): LinkedListNode
    {
        $this->next = $next;
        return $this;
    }
}