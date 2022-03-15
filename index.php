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

class Curso{
    public $publico="modificador de acceso publicp";
    private $private="modificador de acceso privado";
    protected $protected="modificador de acceso protegido";
    

    function obtenerMensajePrivado(){
        return $this->private;
    }
}
// instaciar la clase
$prueba=new Curso();

echo "<h2>".$prueba->publico."</h2>";
echo "<h2>".$prueba->obtenerMensajePrivado()."</h2>";
echo "<h2>".$prueba->protected."</h2>";


 ?>


</body>
</html>


