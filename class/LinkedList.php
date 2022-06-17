<?php

require_once "LinkedListNode.php";

class LinkedList
{
    private ?LinkedListNode $head = null;

    public function add(int $value): LinkedList
    {
        $newNode = new LinkedListNode($value);

        if (!$this->head || $this->head->getValue() > $value) {
            if ($this->head) {
                $newNode->setNext($this->head);
            }

            $this->head = $newNode;

            return $this;
        }

        $node = $this->head;

        while ($node) {
            if ($node->getValue() <= $value &&
                (!$node->getNext() || $node->getNext()->getValue() > $value)
            ) {
                $newNode->setNext($node->getNext());

                $node->setNext($newNode);

                break;
            }
            $node = $node->getNext();
        }

        return $this;
    }

    public function __toString(): string
    {
        $values = [];

        $node = $this->head;

        while ($node) {
            $values[] = $node->getValue();
            $node = $node->getNext();
        }

        return "[" . implode(", ", $values) . "]";
    }
}