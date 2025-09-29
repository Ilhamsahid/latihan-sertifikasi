<?php
// spl_demo.php - contoh SplDoublyLinkedList dan SplFixedArray
$list = new SplDoublyLinkedList();
$list->push('alpha');
$list->push('beta');
$list->push('gamma');
$list->push('delta');
$list->push('epsilon');

echo "Iterasi head->tail:\n";
for ($list->rewind(); $list->valid(); $list->next()) {
    echo " - " . $list->current() . "\n";
}

echo "\nIterasi tail->head:\n";
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
for ($list->rewind(); $list->valid(); $list->next()) {
    echo " - " . $list->current() . "\n";
}

// SplFixedArray
$fixed = new SplFixedArray(5);
for ($i=0;$i<5;$i++) $fixed[$i] = $i * 10;
echo "\nSplFixedArray contents:\n";
foreach ($fixed as $v) echo " - $v\n";
