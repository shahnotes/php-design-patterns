<?php

class Number
{
    private $number1;
    private $number2;
    private $operation;

    public function __construct($number1, $number2, $operation)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operation = $operation;
    }

    public function getNumber1()
    {
        return $this->number1;
    }

    public function getNumber2()
    {
        return $this->number2;
    }

    public function getOperation()
    {
        return $this->operation;
    }

}