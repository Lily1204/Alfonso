<?php

function obtenerProgramas($cantidad =10){
include 'conexion.php';

    try{
        $sql = "SELECT * FROM programas ";
        $resultado = $bd->query($sql);

    }catch(Exception$e){
        echo$e->getMessage();
        return array();
    }
    return $resultado;
}

function obtenerImagenes($cantidad = 20){
    include 'conexion.php';
    
        try{
            $sql = "SELECT * FROM imagenes2";
            $resultado = $bd->query($sql);
    
        }catch(Exception$e){
            echo$e->getMessage();
            return array();
        }
        return $resultado;
    }

function obtenerPrograma($id){
    include 'conexion.php';

    try{
        $sql = "SELECT nombre, imagen, objetivo, actividades, instructor, fecha, verificacion, cantidad FROM programas 
        where id = $id";
        $resultado = $bd->query($sql);

    }catch(Exception $e){
        echo $e->getMessage(); 
        return array();
    }
    return $resultado;
}

