<?php

namespace App\models;

class Gallery
{
    public function index()
    {
//        $dbh = new \PDO('mysql:host=localhost;dbname=myBase', 'root', '');
////        var_dump($dbh);
//        $sth = $dbh->query('SELECT * FROM users');
//        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);
////        echo '<pre>';
//////        var_dump($rows);
////        echo '</pre>';
//        return $rows;
        return
        [
            '/' => 'abc',
            'age' => '30',
            'name' => 'Anton',
        ];
    }
}