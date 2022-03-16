<?php 
class Persona{
    public $nombre;
    public $apellidos;
    public $email;

    public function __construct($nombre, $apellidos, $email){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }

    public function biembenida(){
        return "Bienvenido {$this->nombre} a la POO en php";
    }
    public function despedida(){
        return "Bienvenido {$this->nombre} a la POO en php";
    }
}

 ?>
