<?php
use \Core\App;
require "../core/App.php";
$app = new App();
return;

/*$app = new Controller();

if(isset($_GET['method'])) {
    $method = $_GET['method'];
} else {
    $method = 'index';
}


try {
    if(method_exists($app, $method)) {
        $app->$method();
    } else {
        throw new Exception("No encontrado");

    }
} catch (\Throwable $th) {
    http_response_code(404);
    echo $th->message;
}*/