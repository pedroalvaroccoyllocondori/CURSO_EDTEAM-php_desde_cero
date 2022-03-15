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
// POO
?>
<h1>POO clases</h1>
<?php 

class Curso{
    public $nombre;
    public $duracion;
    public $costo;
    public $profesor;
    public $disponible;

}
// instaciar la clase
$php = new Curso();
$php->nombre='POO EN PHP';
$php->duracion='3 semanas';
$php->costo=10;
$php->profesor='alvaro';
$php->disponible=true;

var_dump($php);


 ?>

</body>
</html>


