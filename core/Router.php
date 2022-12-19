<?php

namespace Core;
use App\controllers\Home;
use App\controllers\About;
use App\controllers\Gallery;
use App\controllers\Error404;
use App\controllers\admin\Admin;

class Router
{
    public function run()
    {
        $url = explode('/', $_SERVER["REQUEST_URI"]);

//        $classNameAdmin = '\App\controllers\admin\\' . ucfirst($url[1]);
//        if (end($url[]))
//        {
//            $classNameAdmin = new $classNameAdmin();
//        }

        if (empty($url[1])) {
                $url = 'home';
        }
        $className = '\App\controllers\\' . ucfirst($url[1]);
        if (class_exists($className)) {
            $classObj = new $className();
        } else {
            $classObj = new Error404();
        }

        $classObj->index();

    }
}