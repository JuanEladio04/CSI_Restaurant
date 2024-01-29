<?php

class comentarioController
{
    static function findAll()
    {
        $conn = ConnectionManager::getConnectionInstance();
        try {
            $stmt = $conn->query("SELECT * FROM comentarios");

            $comentarios = array();
            while ($fila = $stmt->fetchObject()) {
                $comentario = new comentario($fila->id, $fila->rid, $fila->comentario, $fila->fecha, $fila->valoracion);
                $comentarios[] = $comentario;
            }
            return $comentarios;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return array();
        }
    }
    static function getIndexComentaries()
    {
        $conn = ConnectionManager::getConnectionInstance();
        try {
            $stmt = $conn->query('
            SELECT usuarios.imagen AS imagen_usuario, usuarios.nombre AS nombre_usuario, usuarios.apellidos AS apellidos_usuario, comentarios.*
            FROM comentarios
            JOIN reservas ON comentarios.rid = reservas.id
            JOIN usuarios ON reservas.uid = usuarios.id
            WHERE comentarios.valoracion >= 3
            LIMIT 10;
            ');

            $comentarios = array();
            while ($fila = $stmt->fetchObject()) {
                $comentarios[] = $fila;
            }
            return $comentarios;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return array();
        }
    }

    public static function  getAllComentarios(){
        try{
            $conn = ConnectionManager::getConnectionInstance();
            $stmt = $conn->query('
            SELECT usuarios.imagen AS imagen_usuario, usuarios.nombre AS nombre_usuario, usuarios.apellidos AS apellidos_usuario, usuarios.id as id_usuario, comentarios.*
            FROM comentarios
            JOIN reservas ON comentarios.rid = reservas.id
            JOIN usuarios ON reservas.uid = usuarios.id
            ');
            
            $comentarios = [];
            if($stmt){
                while($c = $stmt->fetchObject()){
                    $comentarios[] = $c;
                }
            }
            return $comentarios;
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public static function deleteComentario($id){
        try{
            $conn = ConnectionManager::getConnectionInstance();
            $conn->exec("dELETE FROM comentarios WHERE id = $id");
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public static function newComentario(comentario $comentario){
        try{
            $conn = ConnectionManager::getConnectionInstance();
            $conn->exec("iNSERT INTO comentarios (rid,comentario,fecha,valoracion) VALUES ($comentario->rid,'$comentario->comentario',$comentario->fecha, $comentario->valoracion)");
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}
