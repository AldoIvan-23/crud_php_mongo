<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/AMartinez_Crud_php_Mongo/vendor/autoload.php';
class Conexion{
    public function conectar(){
        try {
        $servidor = "127.0.0.1";
        $usuario = "mongoadmin";
        $pwd = "2310";
        $bd = "crud-aimb";
        $puerto = "27017";
        $cadenaconexion = "mongodb://" .
        $usuario . ":". 
        $pwd . "@" .
        $servidor . ":" .
        $puerto . "/" .
        $bd;
        $cliente = new  MongoDB\Client($cadenaconexion);
        return $cliente->selectDatabase($bd);
        } catch (\Throwable $th){
            return $th->getMessage();
        }
    }
}
 $object = new Conexion();
//  var_dump($object->conectar())
?>