<?php
class usuarioController
{

    static function findByEmail($email)
    {
        $connex = ConnectionManager::getConnectionInstance();
        $resultado = $connex->query('SELECT * FROM usuarios WHERE email = "' . $email . '"');
        if ($resultado->rowCount() == 0) {
            return null;
        } else {
            $user = $resultado->fetchObject();
            $usuario = new Usuario(
                $user->id,
                $user->nombre,
                $user->apellidos,
                $user->email,
                $user->contrasena,
                $user->fecha_nacimiento,
                $user->codigo_postal,
                $user->pais,
                $user->numero_telefono,
                $user->imagen,
                $user->admin
            );
            return $usuario;
        }


    }

    static function cambiarNombre($id, $nombre, $apellidos)
    {
        try {
            $connex = ConnectionManager::getConnectionInstance();
            $sentencia = $connex->prepare("UPDATE usuarios set nombre = ?, apellidos = ? where id = ?");
            $sentencia->bindParam(1, $nombre, PDO::PARAM_STR);
            $sentencia->bindParam(2, $apellidos, PDO::PARAM_STR);
            $sentencia->bindParam(3, $id, PDO::PARAM_INT);
            $sentencia->execute();
            return null;
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    static function cambiarEmail($id, $email)
    {
        try {
            $connex = ConnectionManager::getConnectionInstance();
            $sentencia = $connex->prepare("UPDATE usuarios set email = ? where id = ?");
            $sentencia->bindParam(1, $email, PDO::PARAM_STR);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
            return null;
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }

    static function cambiarPass($id, $pass)
    {
        try {
            $connex = ConnectionManager::getConnectionInstance();
            $sentencia = $connex->prepare("UPDATE usuarios set contrasena = ? where id = ?");
            $sentencia->bindParam(1, $pass, PDO::PARAM_STR);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
            return null;
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }


    static function cambiarFoto($id, $foto)
    {
        try {
            $connex = ConnectionManager::getConnectionInstance();
            $sentencia = $connex->prepare("UPDATE usuarios set imagen = ? where id = ?");
            $sentencia->bindParam(1, $foto, PDO::PARAM_STR);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
            return null;
        } catch (PDOException $exc) {
            return $exc->getMessage();
        }
    }



}
?>