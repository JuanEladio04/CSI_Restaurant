<?php
require "../model/Usuario.php";
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

}
?>