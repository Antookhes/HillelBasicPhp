<?php

namespace Core\Orm;

use PDO;

class DBConnector
{
    private array $config;
    public function __construct()
    {
        $this->setConfig;
    }
    public function connect(): PDO
    {
//        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
        $dbh = new \PDO("mysql:host=localhost;dbname=myBase", "root", "root");
        return $dbh;
    }
    private function getConfig(): array
    {
        $global = include "../../config/common.php";
        $this -> config=$global['DB'];
        return $global;
    }

    private function getDsn(): string
    {
        extract($this->config());
        return "$driver:host=$host; dbname=$db_name";
    }
}