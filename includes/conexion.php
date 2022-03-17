<?php


function conecta(){
    
    try{
        $cadena='mysql:host=localhost;dbname=cursophp';
        $conexion=new PDO($cadena,'root','');
        return true;
    
    }catch(PDOException $e){
        echo "ERROR: ".$e->getMessage();
    }
}

?>