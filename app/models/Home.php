<?php

namespace App\models;
use PDO;
use Core\Orm\Select;

class Home
{
    private string $tableName = 'home';

    public function index()
    {
        $select = new Select;
        $select->setFields(['id'])->setTableName($this->tableName)->execute();

    }
    
}
