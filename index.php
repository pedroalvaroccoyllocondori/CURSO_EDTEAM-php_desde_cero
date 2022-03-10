<?php

// variables en php
$nombre="gato";
$nombre=3.1416;
$_nombre="gatito";

echo $nombre , "\n";
echo $_nombre , "\n";

// concatenacion de variables con .

$entero=100;
$negativo=-63;
$flotante=3.1416;

echo $entero." ".$negativo." " .$flotante ,"\n";

$octal=0755;
$hexadecimal=0xC4E;
$binario=0b1010;

echo $octal." ".$hexadecimal." " .$binario ,"\n";

//obtener el tipo de variables

$divertido=true;

echo "el tipo de dato es ". gettype($divertido);

//obtener el tipo de dato con detalles 

var_dump($divertido);

?>

 
