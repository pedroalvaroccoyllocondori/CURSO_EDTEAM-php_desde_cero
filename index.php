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
<h1>ESTRUCTUAS DE CONTROL switch</h1>
<?php 

// estructura  ELSE IF

$numero=66;

switch ($numero) {
    case 2:
        echo '<h2>el numero es igual a 2</h2>';
        break;
    
    case 3:
        echo '<h2>el numero es igual a 3</h2>';
        break;
    
    case 6:
        echo '<h2>el numero es igual a 6</h2>';
        break;
    
    default:
        echo '<h2>el numero es igual a ninguno</h2>';
        break;
}



?>
    
</body>
</html>


