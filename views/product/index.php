<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 00</title>
</head>
<body>
<h1>Lista de productos</h1>    
<table border="solid">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($productTypes as $product) {?>
        <tr>
        <td><?= $product->id ?></td>
        <td><?= $product->name ?></td>
        <td><a href="/product/show/<?= $product->id ?>">  Ver </a></td>
        </tr>
    <?php } 
?>
    </tbody>
</table>
</body>
</html>