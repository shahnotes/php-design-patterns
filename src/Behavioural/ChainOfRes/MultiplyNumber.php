<?php

class MultiplyNumber implements Handler
{
    private $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    public function handle(Number $number)
    {
        if ($number->getOperation() == '*') {
            $ans = $number->getNumber1() + $number->getNumber2();
            echo $number->getNumber1() . " * " . $number->getNumber2() . " = " . $ans;
        } else {
            $this->nextHandler->handle($number);
        }
    }
}