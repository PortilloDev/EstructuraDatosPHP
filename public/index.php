<?php

require '../vendor/autoload.php';

use Src\Stack;

$stack = new Stack();

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);

//$stack->getStack();

echo $stack->getTop();

