<?php

require_once "class/LinkedList.php";

$list = new LinkedList();

$values = range(0, 30);
shuffle($values);

foreach ($values as $value) {
    echo "Adding $value..." . PHP_EOL;

    $list->add($value);

    echo "Current state: $list" . PHP_EOL;

    usleep(100000);
}
