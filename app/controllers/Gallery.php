<?php

namespace App\controllers;
use App\models\Gallery as modelGallery;

class Gallery extends Controller
{
    public function index()
    {
        echo "Gallery";

        $gallery = new modelGallery();
        var_dump($gallery -> index());
        $this -> render('social/gallery.php');
    }

}

