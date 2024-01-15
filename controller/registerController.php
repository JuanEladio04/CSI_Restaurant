<?php

class registerController{

    public static function insertUser($nom, $apel, $email, $con, $fech, $telef, $pais, $codPost){
        try{
            $conex = ConnectionManager::getConnectionInstance();
            $conCifrada = password_hash($con, PASSWORD_BCRYPT);
            $rs = $conex->query("insert into usuarios (nombre, apellidos, email, contrasena, fecha_nacimiento, codigo_postal, pais, numero_telefono) values
            ('$nom','$apel','$email','$conCifrada','$fech',$codPost,'$pais','$telef')");
            
            if($rs){
                return true;
            } else {
                return false;
            }
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}



?>