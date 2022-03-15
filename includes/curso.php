


<?php 
   
class Curso{
    private $nombre;
    private $duracion;
    private $costo;
    private $profesor;
    private $disponible;

    // metodo constructor
    public function __construct($nombre,$duracion,$costo,$profesor,$disponible){
    $this->nombre =$nombre;
    $this->duracion =$duracion;
    $this->costo =$costo;
    $this->profesor =$profesor;
    $this->disponible =$disponible;
    }

}


 ?>