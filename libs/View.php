<?php

class View
{
    public static function make($name, array $data = [])
    {
        $path = "views/{$name}.php";
        
        //$data = func_get_arg(1);

        if(file_exists($path)) {
            include $path;
        }
    }
}