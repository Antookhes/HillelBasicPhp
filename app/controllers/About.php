<?php

namespace App\controllers;
use App\models\About as modelAbout;
use Core\Render;

class About
{
    public function index()
    {
        $model = new modelAbout();
        $data = $model->index();
        Render::render('social/about.php', $data);
    }
}