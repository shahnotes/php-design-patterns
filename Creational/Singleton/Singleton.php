<?php


class Singleton
{
    private static $singleton = null;

    private function __construct() {
        $this->init();
    }

    public static function getInstance() {
        if (self::$singleton == null) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }

    public function getValue($key) {
        return $key;
    }

    private function init() {
        echo "very costly initial operation...";
    }
}