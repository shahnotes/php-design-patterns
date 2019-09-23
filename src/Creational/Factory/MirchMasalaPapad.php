<?php


class MirchMasalaPapad implements IPapad
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