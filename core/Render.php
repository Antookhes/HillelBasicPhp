<?php

namespace Core;

class Render
{
    public static function render(string $viewName): void
    {
        include '../public/views/' . $viewName;
    }


}