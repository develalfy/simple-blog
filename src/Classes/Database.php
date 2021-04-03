<?php

namespace Blog\Classes;

use Blog\Traits\Singleton;
use PDO;

class Database
{
    use Singleton;

    private $conn;
    private $host = '172.27.0.1';
    private $name = 'blog';
    private $port = '9906';
    private $user = 'user';
    private $pass = 'password';

    public function instance()
    {
        $this->conn = new PDO(
            "mysql:host={$this->host};port={$this->port};dbname={$this->name}",
            $this->user,
            $this->pass
        );
    }

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }
}