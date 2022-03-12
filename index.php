<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// arreglos en php

?>
<p>arreglos indexados</p>
<?php 

// ARREGLOS MULTIDIMENSIONALES indexado

$alumnos=array(
    array('alvaro',20,'cusco'),#fila1
    array('carlos',55,'ica'),  #fila2
    array('maria',35,'lima'),  #fila3
    array('juana',56,'la libertad'),  #fila4
);

echo var_dump($alumnos);
echo   "</br>".$alumnos[3][0]."</br>";

// ARREGLOS MULTIDIMENSIONALES asociativo

$alumnosNombre=array(
    array('nombre'=>'alvaro','edad'=>20,'ciudad'=>'cusco'),#fila1
    array('nombre'=>'carlos','edad'=>55,'ciudad'=>'ica'),  #fila2
    array('nombre'=>'maria','edad'=>35,'ciudad'=>'lima'),  #fila3
    array('nombre'=>'juana','edad'=>56,'ciudad'=>'la libertad'),  #fila4
);

echo var_dump($alumnosNombre);
// agregando un nuevo valor a  array multidimensional asociativo
$alumnosNombre[0]['calificaciones']=20.00;
echo   "</br>"."</br>";
echo var_dump($alumnosNombre);


echo   "</br>".'el nombre es '.$alumnosNombre[0]['nombre']."</br>";


?>
   
    
</body>
</html>


