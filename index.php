<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>BASES DE DATOS EN PHP</h1>
<?php 


    require_once __DIR__ . '/includes/conexion.php';

    $conecta=conecta();
    if($conecta==true){
        echo "<h3> me conecte a mysql</h3>";
    }else{
        
    }

  
    
 ?>



</body>
</html>


