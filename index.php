<?php

require 'bubbleSort.php';
require 'HeapSort.php';

$bubbleSort = new bubbleSort();

$array = [11, 6, 15, 8, 10, 100, 25, 301, 1];

echo "<h1>BubleSort</h1><br>";
print_r($bubbleSort->bubbleSortFunc($array));

echo "<h1>HeapSort</h1><br>";
$heapSort = new HeapSort();
print_r($heapSort->heapfy($array));

