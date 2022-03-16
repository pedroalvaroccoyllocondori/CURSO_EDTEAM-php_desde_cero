<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>POO clases</h1>
<?php 


    require_once __DIR__ . '/includes/global.php';

   #instancia de estudiante 

   $estudiante = new Estudiante('alvaro','ccoyllo','alvaro@gmail.com');
    var_dump($estudiante);

    echo '<h1>'.$estudiante->biembenida().'</h1>';
    echo '<h1>'.$estudiante->despedida().'</h1>';
    echo '<h1>'.$estudiante->validarCompra().'</h1>';
    echo $estudiante::MONEDA;
    
    $profesor = new Profesor('alonso','ccoyllo','alvaro@gmail.com');
    var_dump($profesor);
    
    echo '<h1>'.$profesor->biembenida().'</h1>';
    echo '<h1>'.$profesor->validarCompra().'</h1>';
    echo $estudiante::MONEDA;
    
 ?>



</body>
</html>


