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
<p>operaciones entre arreglos</p>
<?php 


// suma de valores del arreglos 

$numeros=[10,20,30,40,50];
$suma=array_sum($numeros);
echo "mi suma de valores del arreglo es ".$suma."</br>";

// encontrar diferencia entre arregglos DIFERENCIA DE CONJUNTOS

$salon =['a1'=>'alvaro','a2'=>'pedro','a3'=>'martin','a4'=>'jose'];
$salon1=['a1'=>'jose','a2'=>'alberto','a3'=>'maria','a4'=>'pedro'];
$diferencia=array_diff($salon,$salon1);

echo 'la diferencia de array es ';
var_dump($diferencia);
echo "</br></br>";

// dividir un arreglo  especificando su tamaño

$arregloIndexado=[
    'elemento1', 'elemento2', 'elemento3',
    'elemento4', 'elemento5', 'elemento6', 
    'elemento7', 'elemento8', 'elemento9'
];

$dividir=array_chunk($arregloIndexado,5);
var_dump($dividir);


// dividir un arreglo y eliminar lo anteriror
echo "</br></br>";
$arregloIndexado=[
    'elemento1', 'elemento2', 'elemento3',
    'elemento4', 'elemento5', 'elemento6', 
    'elemento7', 'elemento8', 'elemento9'
];

var_dump(array_slice($arregloIndexado,8));

// unir arregglos
echo "</br></br>";
$frutas=['banana','zandia','naranja'];
$verduras=['zapallo','tomate','coliflor'];
$unir=array_merge($frutas,$verduras);
var_dump($unir);


// eliminar el ultimo elemento
echo "</br></br>";
$arregloIndexado=[
    'elemento1', 'elemento2', 'elemento3',
    'elemento4', 'elemento5', 'elemento6', 
    'elemento7', 'elemento8', 'elemento9'
];
array_pop($arregloIndexado);
var_dump($arregloIndexado);
 
//agregar un nuevo elemento al arreglo de la
echo "</br></br>";
array_push($arregloIndexado,'elemento indeterminado');
var_dump($arregloIndexado);

//buscar un elemento en el array de la
echo "</br></br>";
$buscar=array_search('elemento4',$arregloIndexado);#devuelve un valor entero de la posicion encontrada
var_dump($buscar);


?>
   
    
</body>
</html>


