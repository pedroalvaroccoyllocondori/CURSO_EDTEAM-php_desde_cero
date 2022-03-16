<?php 

trait Compra{
    private $compra;
    function validarCompra(){
        return "compra exitosa";
    }
}

class Persona{


    use Compra;#se agrega mas trait con las comas
    const MONEDA='PEN';
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
    final public function despedida(){
        return "ADIOS {$this->nombre} a la POO en php";
    }
}

 ?>
