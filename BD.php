<?php 

const BD='mysql';
const DB_SERVIDOR='localhost';
const DB_CHARSET='utf8';

abstract class DB{
    private static $db_usuario = 'root';
    private static $db_pass = '';
    private static $db_servidor = 'localhost';
    private static $db_nombre = 'cursophp';
    private static $db_charset = DB_CHARSET;
    private $conexion;

    public function conectar(){
        try{
            $dbn="mysql:host=".self::$db_servidor.";dbname=".self::$db_nombre;
            $pdo= new PDO($dbn,self::$db_usuario,self::$db_pass);
            $pdo->exec("SET CHARACTER SET ".self::$db_charset);



            // habilitar mensajes de error
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            return $pdo;

        }catch(PDOException $e){
            exit("ERROR: ".$e->getMessage());
        }
    }

    private function desconectar(){
        $this->conexion =null;
    }

    // CRUD

    abstract protected function insertar($registro);
    abstract protected function consultar();
    // abstract protected function actualizar($registro);
    // abstract protected function eliminar($registro,$eliminar);

}


?>