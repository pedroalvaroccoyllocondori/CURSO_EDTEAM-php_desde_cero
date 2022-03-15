


<?php 

interface Requerimiento{
    public function asignarRequerimiento($listado);
    public function obtenerRequerimiento();
}
   

interface Conocimiento{
    public function asignarConocimiento($listado);
    public function obtenerConocimiento();
}

class Curso implements Conocimiento,Requerimiento{
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

    // GETTER Y SETTER
    // getter
    public function getNombre() {
        return $this->nombre;
    }
    public function getProfesor() {
        return $this->profesor;
    }
    // setter
    public function setNombre($nombre) {
        $this->nombre =$nombre;

    }
    public function setProfesor() {
        $this->profesor =$profesor;

    }

    // implementando interfaces

    public function asignarRequerimiento($listado){
        $this->listado=$listado;

    }

    public function obtenerRequerimiento(){
        if(!empty($this->listado)){
            foreach($this->listado as $listafor){
                echo '<h3>'.$listafor.'</h3>';
            }
        }
    }

    public function asignarConocimiento($listado){

    }

    public function obtenerConocimiento(){
        
    }



}


 ?>