<?php

// asignacion de varibles por referencia
// la asignacion por referencia apunta a un variable en memoria no importa
// si la variable sufrio cambios anteriormente simpre apuntara al mismo espacio de memoria 

$nueva_variable=&$varriable_nueva;

$varriable_nueva="hola a los gatitos";

echo $nueva_variable;

?>

 
