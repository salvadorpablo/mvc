<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <h1>Detalle de producto <?= $producto->id ?></h1>
    <ul>
        <li>
            Nombre: <?= $product->name ?>
        </li>
        <li>
            ID: <?= $product->id ?>
        </li>
    </ul>
</body>
</html>