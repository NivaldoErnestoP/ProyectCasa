<?php

include_once 'conexion.php';

$sql_leer='select * from clientes';
$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado =$gsent->fetchAll();
var_dump($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="padding:20px" class="header">
        <div  style="background:#f00" class="div_header">
            <h1  class="title"> Aprendiendo Favorito Lengunguaje de programacion</h1>
         <?php foreach($resultado as $dato) ?>
        </div>
    </header>
</body>
</html>
