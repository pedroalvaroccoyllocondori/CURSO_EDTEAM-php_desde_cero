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

// ESTRUCTURA DEL BUCLE WHILE
$i=1;
while ($i <= 10) {
    echo "el numero es ".$i."\n"."</br>";
    $i++;
}

// while en array
$frutas=array("manzana","peras","bananas","limon");

$salir =0;
$i=0;
while ($salir != 1){
    if ($frutas[$i]=='bananas') {
        echo '<h1>encontre las bananas </h1>';
        $salir = 1;
    }else{
        echo '<h1>la fruta encontrada'.$frutas[$i].'</h1>';
        $i++;
    }
}


// ciclo do while se ejecuta al menos una vez


$i=-2;
do {
    echo "numero ".$i."</br>";
    $i++;
}while($i<5)





 ?>
</body>
</html>


