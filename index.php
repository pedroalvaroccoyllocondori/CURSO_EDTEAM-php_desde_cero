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

// array asociativo

echo ' <p>arreglos asociativos</p>';

$usuario=['alvaro'=>'javascrip','carlos'=>'css','maria'=>'c#'];
$usuario=array('alvaro'=>'javascript','carlos'=>'css','maria'=>'c#');

echo var_dump($usuario);
echo   "</br>"."el leguaje que mas me gusta es ".$usuario['alvaro']. "</br>";


?>
   
    
</body>
</html>


