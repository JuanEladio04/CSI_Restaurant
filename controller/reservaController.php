<?php
class reservaController{

    public static function insertReserva($id, $nom, $apel, $telef, $comensales, $fecha, $hora, $espec){
        try{
            $conex = ConnectionManager::getConnectionInstance();
            $rs = $conex->query("insert into reservas (uid, nombre, apellidos, numero_telefono, comensales, fecha, hora, especificaciones) values ('$id','$nom','$apel','$telef','$comensales','$fecha','$hora','$espec')");
            
            if($rs){
                return "Usuario insertado con exito";
            } else {
                return "Hubo un problema";
            }

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

?>