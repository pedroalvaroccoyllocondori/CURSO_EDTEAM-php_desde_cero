<?php 
class Profesor extends Persona{
// polimorfismo sobre escritura de metodos
    public function biembenida(){
        return "Bienvenido  PROFESOR {$this->nombre} a la POO en php";
    }


}

 ?>
