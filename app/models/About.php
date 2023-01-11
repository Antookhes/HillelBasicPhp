<?php

namespace App\models;

class About
{
    public function index()
    {
        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
//        var_dump($dbh);
        $sth = $dbh->query('SELECT * FROM about');
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
//        echo '<pre>';
//        var_dump($rows);
//        echo '</pre>';
        return $rows;

    }
}