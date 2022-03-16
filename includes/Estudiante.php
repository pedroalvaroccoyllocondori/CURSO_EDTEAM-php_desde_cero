<?php 
class Estudiante extends Persona{
    public function __construct($nombre, $apellidos,$email){

        parent::__construct($nombre,$apellidos,$email);
    }

    public function biembenida(){
        return "Bienvenido  estudiante {$this->nombre} a la POO en php";
    }
 

}

 ?>
