<?php

class BubbleSort implements SortStrategy
{
    private $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function sort()
    {
        return $this->data;
    }
}