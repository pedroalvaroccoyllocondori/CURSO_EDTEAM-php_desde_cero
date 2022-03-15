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
    define('INC','/includes/');
    require_once __DIR__ . INC . 'curso.php';

    $curso1= new Curso('css','3semanas',100,'alvaro ccoyllo',true);
    $curso2= new Curso('scss','15semanas',1000,'jadhiel rodriguez',true);

    echo $curso1->getNombre()."</br>";
    echo $curso1->getProfesor()."</br>";

    $curso1->setNombre('css avanzado');
    echo $curso1->getNombre()."</br>";


 ?>


</body>
</html>


