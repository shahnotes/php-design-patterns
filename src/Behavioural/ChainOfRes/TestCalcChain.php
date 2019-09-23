<?php

$handler1 = new AddNumber();
$handler2 = new SubtractNumber();
$handler3 = new MultiplyNumber();
$handler4 = new DivideNumber();

$numbers = new Number(2,4, '+');

$handler1->setNext($handler2);
$handler2->setNext($handler3);
$handler3->setNext($handler4);

$handler1->handle($numbers);