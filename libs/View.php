<?php

class View
{
    public static function make($name)
    {
        $path = "views/{$name}.php";
        
        if(file_exists($path)) {
            include $path;
        }
    }
}