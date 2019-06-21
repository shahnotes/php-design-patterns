<?php


class UdadPapad implements IPapad
{
    private $ingredients = [];

    public function addIngredient($ingredient, $weight)
    {
        $this->ingredients[$ingredient] = $weight;
    }

    public function toString()
    {
        print_r($this->ingredients);
    }
}