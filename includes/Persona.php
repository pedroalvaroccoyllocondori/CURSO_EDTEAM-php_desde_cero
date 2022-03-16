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
        $this->correoValido($this->email);
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->nombre = $nombre;
       

    }

    public function validarNombre(){

    }
    public function correoValido($email){

        try{
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                throw new Exception("correo invalido");
            }
           
        }catch(Exception $e){
            echo $e->getMessage();
        }

    }
    public function biembenida(){
        return "Bienvenido {$this->nombre} a la POO en php";
    }
    final public function despedida(){
        return "ADIOS {$this->nombre} a la POO en php";
    }
}

 ?>
