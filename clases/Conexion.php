<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/CRUD_MONGO/vendor/autoload.php";
    class Conexion {
    public function conectar(){
       try{
        $servidor = "localhost";
        $usuario = "mongoadmin";
        $password = "123456";
        $baseDatos = "crud";
        $puerto = "27017";

        $cadenaConexion = "mongodb://" .
                    $usuario . ":" .
                    $password . "@" .
                    $servidor . ":" . 
                    $puerto . "/" . 
                    $baseDatos;
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
       } catch (\Throwable $th){
        return $th->getMessage();
       }
    }
}





?>