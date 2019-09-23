<?php


abstract class Burger
{
    final public function makeBurger() {
        $this->cutBun();
        if ($this->customerWantsMeat()) {
            $this->addMeat();
        }
        if ($this->customerWantsCheese()) {
            $this->addCheese();
        }
        if ($this->customerWantsVeggie()) {
            $this->addVeggie();
        }
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
        $this->wrapBurger();
    }

    protected function cutBun() {
        echo "The bun is cut";
    }

    protected abstract function addMeat();
    protected abstract function addCheese();
    protected abstract function addVeggie();
    protected abstract function addCondiments();

    protected function customerWantsMeat() { return true; }
    protected function customerWantsCheese() { return true; }
    protected function customerWantsVeggie() { return true; }
    protected function customerWantsCondiments() { return true; }

    protected function wrapBurger() {
        echo "Wrap the burger";
    }

}