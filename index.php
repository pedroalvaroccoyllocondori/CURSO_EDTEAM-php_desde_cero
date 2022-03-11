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
<p>arreglos</p>
<?php 
$arregloNumeros=[];
$arrreglo_numero=array();

//no se puede inprir el arreglo por q la funcion echo solo acepta enteros y cadenas
// echo $arregloNumeros;
echo var_dump($arregloNumeros)."</br>";
//funcion para la inpresion de arreglos
print_r($arregloNumeros);

echo "</br>";
//array indexado

$meses=['enero','febrero','marzo'];

var_dump($meses);
echo   "</br>".$meses[0]. "</br>";

//añadiendo un nuevo valor al array

$meses[]="abril";

echo var_dump($meses);
//añadiendo un nuevo valor al array en una posicion determinada
echo "</br>";

$meses[10]="noviembre";

echo var_dump($meses);
//error al imprimir una posicion q no existencia
echo   "</br>".$meses[6]. "</br>";


?>
    
</body>
</html>


