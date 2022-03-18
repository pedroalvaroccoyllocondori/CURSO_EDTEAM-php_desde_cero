
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
    <?php
    
    var_dump(PDO::getAvailableDrivers());

    ?>
    <h3>insertar</h3>
    <?php
    
    $alumno=[
        'nombre'=>'jose',
        'paterno'=>'ccoyllo',
        'materno'=>'condori',
        'email'=>'pedrp@aloooooooo'
    ];

    $estudiantee->insertar($alumno)

    ?>

</body>
</html>