<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 00</title>
</head>
<body>
<h1>Lista de usuarios</h1>    
<table border="solid">
    <?php foreach($users as $user) {?>
        <tr>
        <td><?php echo "Usuario " . $user[0] ?></td>
        <td><?php echo $user[1] ?></td>
        <td><a href="?method=show&id=<?php echo $user[0] ?>">Ver</a></td>
        </tr>
    <?php } 
?>
</table>
</body>
</html>