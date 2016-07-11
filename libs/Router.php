<?php

class Router
{
    function __construct()
    {
        if(isset($_GET['url']))
        {
            $request = $_GET['url'];
            $request = rtrim($request, '/');
            $request = explode('/', $request);
            
            $controller = $request[0];
            $action = $request[1];

            if(isset($request[2]))
            {
                $file = 'controllers/' . ucfirst($controller) . 'Controller.php';

                if(file_exists($file))
                    require_once $file;

                switch(count($request))
                {
                    case 3:

                        if(class_exists($controller))
                            $controller = new $controller();

                        if(method_exists($controller, $action))
                            $controller->$action($request[2]);
                    break;

                    case 4:

                        if(class_exists($controller))
                            $controller = new $controller();

                        if(method_exists($controller, $action))
                            $controller->$action($request[2], $request[3]);
                    break;
                }
            }
            else
            {
                $file = 'controllers/' . ucfirst($controller) . 'Controller.php';

                if(file_exists($file))
                    require_once $file;
                
                if(class_exists($controller))
                    $controller = new $controller();
                
                if(method_exists($controller, $action))
                    $controller->$action();
            }
        }
        else
        {
            require_once 'controllers/HomeController.php';
            $controller = new HomeController();
        }
    }
}