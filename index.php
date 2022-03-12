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
<h1>ESTRUCTUAS DE CONTROL else ,if ,else if</h1>
<?php 

// estructura  ELSE IF

$numero=6;
if ($numero==5) {
    echo '<h2>el numero es igual a 5</h2>';
}else if ($numero==6){
    echo '<h2>el numero es igual a 6</h2>';
}else if ($numero==7){
    echo '<h2>el numero es igual a 7</h2>';
}else{
    echo '<h2>el numero no es igual a ninguno</h2>';
}


// OPERADOR TERNARIO remplaza  al if

$A=($numero==2)?"es igual a 1":"no es igual a ninguno";
echo "el resultado es ".'<span style="color:red">'.$A."<span/>"


?>
    
</body>
</html>


