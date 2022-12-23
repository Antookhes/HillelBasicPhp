<?php

namespace App\controllers;

class Home extends Controller
{
    public function index()
    {
//        $this->render('social/home.php');
//        var_dump($_POST);
//        include '../public/views/social/home.php';
        echo 'Home';
    }
    public function metod()
    {
        echo 'Metod home';
    }
    public function error()
    {
        echo 'Metod error';
    }
}