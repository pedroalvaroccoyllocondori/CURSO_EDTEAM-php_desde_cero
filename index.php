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


// funcion anonima

$despedida= function(){
    echo "esta es un funcion anonima";
};
$despedida();


// funcion anomina closure CALLBACKS

function finalizarCurso(Closure $curso,$nombre){
    return $curso($nombre);
}

$php = function($nombre){
    return "<h1>gracias ".$nombre." por finalizar el curso</h1>";
};
$javascrit = function($nombre){
    return "<h1>gracias ".$nombre." por finalizar el curso</h1>";
};

echo finalizarCurso($php,'jadhiel');
echo finalizarCurso($javascrit,'alvaro');


 ?>

</body>
</html>


