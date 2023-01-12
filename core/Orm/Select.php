<?php

namespace Core\Orm;
use PDO;
use Core\Orm\DBConnector;

class Select
{
    private string $tableName;

    private array $fields = ['*'];

    private PDO $connector;

    private function __construct()
    {
        $connector = new DBConnector();
        $this->connector = $connector -> connect();
    }

    public function execute(): array
    {
        $query = $this->buildQuerry();
        $query = $this->connector -> query ($sql);
        $rows = $query -> fetchAll(PDO:: FETCH_ASSOC);
        return $rows;
    }
    private function buildQuery(): string
    {
        return 'SELECT ' . $this->getFieldsString() . ' FROM ' .$this->$tableName;
    }
    public function setTableName(string $tableName):self
    {
        $this->tableName = $tableName;
        return $this;
    }
    public function setFields(array $fields):self
    {
        $this->fields = $fields;
        return $this;
    }
    public function getFieldsString():string
    {
        $result = [];
        foreach ($this->fields as $key=>$field)
        {
            $result[] = (is_int($key)) ? $field : $field . ' as ' . $key;
        }
        return implode (',', $result);
    }
}
