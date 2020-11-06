<?php
namespace App\Controllers;

require_once('../app/models/User.php');
use \App\Models\User; //para poder utilizar $users = \App\Models\User::all()
class UserController
{

    public function __construct()
    {
        //echo "en UserController<br>";
    }

    public function index(){
        //echo "En método index<br>";

        //buscar la lista de usuarios
        // User::all(); no encontrará la clase porque busca en app/models (si no hemos puesto use \App\Models\User; arriba)

        //$users = \App\Models\User::all();
        

        $users = User::all();

        // echo "<pre>";
        // print_r($users);

        //generar la vista
        include('../views/user/index.php');
    }

    public function show($arguments){
        echo "En método show<br>";
        var_dump($arguments);
    }
}