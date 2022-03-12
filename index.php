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

// funciones nativas en los arreglos 

$cadena='';
$arrglo=[];
$arregloIndexado=[
    'ilemento1', 'alemento2', 'elemento3',
    'olemento4', 'alemento5', 'blemento6', 
    'elemento7', 'elemento8', 'elemento9'
];

#funcion para saber si una funcion es vacio

var_dump(empty($arrglo));
echo "</br>";
var_dump(empty($arregloIndexado));
echo "</br>";


# funcion var saber si existe un elemento

var_dump(isset($arregloIndexado[50]));

#contar elementos de un arrglo

echo "</br>"."elementos del arrglo ".count($arregloIndexado);

#funcion para el antepenultimo elemento

$posicion=count($arregloIndexado)-2;

echo "</br>"."antepenultimo elementos del arrglo ";

echo " ' ".$arregloIndexado[$posicion]." ' ";

// ordenar los elementos de un array de manera alfabetica PIERDEN EL INDICE

echo "</br></br></br></br>";
sort($arregloIndexado);

echo var_dump($arregloIndexado);

// ordenar los elementos de un array de manera alfabetica  SIN PIERDEN EL INDICE

echo "</br></br></br></br>";
asort($arregloIndexado);

echo var_dump($arregloIndexado);


// ordenar los elementos de un array de manera INVERSA SIN PERDER INDICES

echo "</br></br></br></br>";
arsort($arregloIndexado);

echo var_dump($arregloIndexado);


// ordenar los elementos de un array de manera INVERSA PERDIENDO INDICES

echo "</br></br></br></br>";
rsort($arregloIndexado);

echo var_dump($arregloIndexado);


?>
   
    
</body>
</html>


