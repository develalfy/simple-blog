<?php

namespace Blog\Traits;

//https://coderwall.com/p/lk4ehw/singleton-classes-in-php-using-traits

trait Singleton
{
    private static $singleton = false;

    private function __construct() {
        $this->instance();
    }

    public static function getInstance() {
        if (self::$singleton === false) {
            self::$singleton = new self();
        }

        return self::$singleton;
    }
}