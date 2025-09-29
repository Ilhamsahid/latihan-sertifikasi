<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/stack.php';

use App\Stack;

$s = new Stack();
$s->push('first');
$s->push('second');
$s->push('third');
echo "peek: " . $s->peek() . "\n";
while (!$s->isEmpty()) {
    echo "pop: " . $s->pop() . "\n";
}
