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
// ciclos
?>
<h1>CICLOS</h1>
<?php 

// FOREACH
// arreglos indexados
$ARRAY=array('gato','perro','perico','raton');

foreach($ARRAY as $elemento){
    echo $elemento."</br>";
}

// arreglos asociativos

$ARRAY=array('gato'=>'cat','perro'=>'dog','perico'=>'bird','raton'=>'mouse');

foreach($ARRAY as $esp=>$ing){
    echo "la llave es ".$esp.',el valor es '.$ing."</br>";
}



 ?>
</body>
</html>


