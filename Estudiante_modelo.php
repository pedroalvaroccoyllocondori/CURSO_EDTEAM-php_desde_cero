<?php

require_once "BD.php";

class Estudiante_modelo extends DB{
     private $db;
     private $nombre;
     private $paterno;
     private $materno;
     private $email;
     private $tabla="usuarios";


     public function insertar($registro){
         $conexion=parent::conectar();
        //  var_dump($conexion);
         try{
            $query="INSERT INTO usuarios SET nombre=:nombre,paterno=:paterno,materno=:materno,email=:email";

            $insertar = $conexion->prepare($query)->execute($registro);

            echo "he insertado un registro";

         }catch(Exception $e){
 
         }


     }

     public function consultar(){
         $conexion=parent::conectar();
        try{

            $query="SELECT * FROM usuarios";
            return $consulta=$conexion->query($query)->fetchAll();#fetch solo busca el primer registro y fetchAll todos los registros

        }catch(Exception $e){
            exit("ERROR: ".$e->getMessage());
        }
         
     }
     public function actualizar($registro){
         $conexion=parent::conectar();
         try{

            $query="UPDATE usuarios SET nombre =:nombre,paterno=:paterno ,materno=:materno WHERE email=:email";

            $actualizar=$conexion->prepare($query)->execute($registro);

            echo "se ha actualizado un registro";

         }catch(Exception $e){

         }
      
         
     }
    //  public function eliminar(){
      
         
    //  }

}

?>