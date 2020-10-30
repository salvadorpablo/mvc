<?php
class UserController
{
    public function __construct()
    {
        "en UserController<br>";
    }

    public function index(){
        echo "En método index<br>";
    }

    public function show($arguments){
        echo "En método show<br>";
        var_dump($arguments);
    }
}