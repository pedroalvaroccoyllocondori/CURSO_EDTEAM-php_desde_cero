


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

    public static $moneda='PEN';

    // metodo constructor se ejecuta cuando todas las instancias y los metodos se ejecutan  destruyendo el objeto
    public function __construct($nombre,$duracion,$costo,$profesor,$disponible){
    $this->nombre =$nombre;
    $this->duracion =$duracion;
    $this->costo =$costo;
    $this->profesor =$profesor;
    $this->disponible =$disponible;
    }
    // metodo destructor
    public function __destruct(){
        echo "<h1>destrurendo      ".$this->nombre."</h1>";
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
    static function obtenerMoneda(){
        return self::$moneda;
    }


}


 ?>