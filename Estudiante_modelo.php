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

     public function consultar($campos=null,$where=null){
         $conexion=parent::conectar();
        try{
            $cadena ='';
            if(!empty($campos)){
                foreach($campos as $campIterado){
                    $cadena .= $campIterado.",";
                }
                $cadena=substr($cadena,0,-1);

            }else{
                $cadena = '*';
            }
            
            if($where!==null){
                foreach($where as $llave =>$valor){
                    if ($valor!==null){} {
                        $condicion[] = $llave." ".$valor;
                    }
                }
                $query="SELECT ".$cadena."FROM usuarios WHERE".implode(" AND ",$condicion);

            }else{
                $query="SELECT ".$cadena."FROM usuarios";
            }
            $consulta = $conexion->prepare($query)->fetchAll();
            return $consulta;
            

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
     public function eliminar($accion,$eliminar){
         $conexion=parent::conectar();

         if ($accion =="todos") {
             try{
                $query="DELETE FROM usuarios";
                $eliminar=$conexion->prepare($query)->execute();
                echo "se ha eliminado todos los  registro";

             }catch(Exception $e){
                exit("ERROR: ".$e->getMessage());
            }   
        }else{
            try{
                $query="DELETE FROM usuarios WHERE email=:email";
                $eliminar=$conexion->prepare($query)->execute($eliminar);
                echo "se ha eliminado un registro";



            }catch(Exception $e){
               exit("ERROR: ".$e->getMessage());
           }
         }
      
         
     }

}

?>