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
// funciones
?>
<h1>FUNCIONES</h1>
<?php 


//funcion con parametro predefinido
function sumarNumero($a,$b,$imprimir=false) {
    $suma=$a+$b;
    if ($imprimir) {
        echo "la suma es ".$suma."</br>";
        
    }else{
        return $suma;
    }
}
sumarNumero(15,25,true)


 ?>
</body>
</html>


