<?php
include_once 'PalindromeQueue.php';

$string1 = new PalindromeQueue(10);
$string1->addItem(m);
$string1->addItem(a);
$string1->addItem(d);
$string1->addItem(a);
$string1->addItem(m);
echo $string1->getAll();
$string1->getItem();
$string1->palindrome();
