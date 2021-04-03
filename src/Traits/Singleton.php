<?php

namespace Blog\Traits;

use PDO;

trait Singleton
{
    protected static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $user = 'user';
    private $pass = 'password';
    private $name = 'blog';

    private function __construct()
    {
        $this->conn = new PDO(
            "mysql:host={$this->host};dbname={$this->name}",
            $this->user,
            $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
        );
    }

    /**
     * call this method to get instance
     **/
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}