<?php


class Singleton
{
    private static $singleton = null;

    private function __construct() {
        $this->init();
    }

    public static function getInstance(): self {
        if (self::$singleton == null) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }

    private function __clone()
    {

    }

    public function getValue($key) {
        return $key;
    }

    private function init() {
        echo "very costly initial operation...";
    }
}