<?php
namespace App\Models;

use PDO;
use PDOException;

class ProductType
{
    public function __construct(){

    }

    public static function all(){ //static porque está asociado a la clase

        $db= ProductType::db(); //obtengo el objeto de la base de datos

        $statement = $db->query('SELECT * FROM users');
        $productTypes = $statement->fetchAll(PDO::FETCH_CLASS, ProductType::class);
        
        return $productTypes;

        //return "todos los registros";
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }
}