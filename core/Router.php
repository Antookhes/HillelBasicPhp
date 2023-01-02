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
        $arr = explode('/', $_SERVER["REQUEST_URI"]);
        if (empty($arr[1])) {
                $arr[1] = 'home';
        }
        $className = '\App\controllers\\' . ucfirst($arr[1]);
        if (class_exists($className)) {
            $classObj = new $className();
        } else{
            $classObj = new Error404();
        }
        if(empty($arr[2])){
            $arr[2] = 'index';
        }
        if(method_exists($classObj, $arr[2])){
            $classMetod = $arr[2];
        } else
            $classMetod = 'error';
        $classObj -> $classMetod();
    }
}