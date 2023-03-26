<?php

    class Crud extends Conexion {
        public function mostrarDatos(){
            try{
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th){
                return $th->getMessage();

            }
        }
    }



?>