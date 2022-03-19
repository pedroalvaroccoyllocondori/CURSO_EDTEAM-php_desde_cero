
<?php 
require_once "Estudiante_modelo.php";
$estudiantee = new Estudiante_modelo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>crud de estudiante</h1>
    <h1>insertar</h1>
    <?php
    
    var_dump(PDO::getAvailableDrivers());
    
    ?>
    <?php
    
    $alumno=[
        'nombre'=>'jose',
        'paterno'=>'ccoyllo',
        'materno'=>'condori',
        'email'=>'pedrp@aloooooooo'
    ];
    
    $estudiantee->insertar($alumno)
    
    ?>
    <h1>consulta</h1>
    <?php
    $respuesta = $estudiantee->consultar();

    foreach ($respuesta as $respuestaIterada){
        echo $respuestaIterada['nombre']." ".$respuestaIterada['paterno']."</br>";
    }

    // var_dump($respuesta);
    
    ?>
    <h1>actualizar</h1>
    <?php
      $alumno=[
        'nombre'=>'juan miguel',
        'paterno'=>'vargas',
        'materno'=>'condori',
        'email'=>'pedrp@aloooooooo'
    ];

    $estudiantee->actualizar($alumno)
    ?>


    <h1>eliminar</h1>
    <?php
      $alumno=[
        'email'=>'pedrp@aloooooooo'
    ];

    // $estudiantee->eliminar("todos",$alumno)
    ?>

</body>
</html>