<?php
namespace Core;
class App
{
    function __construct()
    {
        // echo "construyo App"<br>;

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        //descomponer (explode) mete cada uno de los fragmentos entre / y / en un array
        //trim() es para que, si hay 2 barras //, no lo tenga en cuenta
        $arguments = explode('/', trim($url, '/'));

        $controllerName = array_shift($arguments);

        //uc (UPPER CASE) pero solamente la primera letra de cada palabra (words)
        
        $controllerName = ucwords($controllerName) . "Controller";

        if (count($arguments)) {
            $method =  array_shift($arguments);
        } else {
            $method = "index";
        }


        $file = "../app/controllers/$controllerName" . ".php"; //importo un nuevo namespace
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }

        $controllerName = "\App\Controllers\\$controllerName";
        
        $controllerObject = new $controllerName; //creo el namespace aqui
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}
