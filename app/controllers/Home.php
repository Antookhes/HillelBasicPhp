<?php

namespace App\controllers;
use Core\Render;
use App\models\Home as modelHome;

class Home extends Controller
{
    public function index()
    {
        var_dump($_GET);
        $model = new modelHome();
        $data = $model->index();
        Render::render('social/home.php', $data);
    }
}