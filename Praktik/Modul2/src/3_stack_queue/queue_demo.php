<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/queue.php';

use App\Queue;

$q = new Queue();
$q->enqueue('a');
$q->enqueue('b');
$q->enqueue('c');
echo "peek: " . $q->peek() . "\n";
while (!$q->isEmpty()) {
    echo "dequeue: " . $q->dequeue() . "\n";
}
