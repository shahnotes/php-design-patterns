<?php

interface Handler
{
    public function setNext(Handler $handler);
    public function handle(Number $number);
}