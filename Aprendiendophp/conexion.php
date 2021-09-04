<?php
$link ='mysql:host=localhost;dbname=prueba';
$usuario='root';
$contraseña="1234";

try{
  $pdo=new PDO($link, $usuarios, $contraseña);
  echo 'Conectado';
   
   
  foreach ($pdo ->query('select * from clientes') as $fila) {
      # code...
      print ($fila);
  }


}catch(PDOException $e){
    print "!Error! :" . $e->getMessage()."<br/>";
    die();
}