<?php
namespace App\Controllers;

require_once('../app/models/ProductType.php');
use \App\Models\ProductType;
class ProductController 
{
    public function __construct()
    {
        //"en ProductController<br>";
    }

    public function index(){
        //echo "En método index<br>";

        $productTypes= ProductType::all();
        include('../views/product/index.php');
    }
}
