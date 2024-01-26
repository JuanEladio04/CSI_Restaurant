<?php
class reservaController{

    public static function insertReserva($id, $nom, $apel, $telef, $comensales, $fecha, $espec){
        try{
            $conex = ConnectionManager::getConnectionInstance();
            $rs = $conex->query("insert into reservas (uid, nombre, apellidos, numero_telefono, comensales, fecha, especificaciones) values ('$id','$nom','$apel','$telef','$comensales','$fecha','$espec')");
            
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