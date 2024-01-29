<?php
class reservaController
{

    public static function insertReserva($id, $nom, $apel, $telef, $comensales, $fecha, $espec)
    {
        try {
            $conex = ConnectionManager::getConnectionInstance();
            $rs = $conex->query("insert into reservas (uid, nombre, apellidos, numero_telefono, comensales, fecha, especificaciones) values ('$id','$nom','$apel','$telef','$comensales','$fecha','$espec')");

            if ($rs) {
                return "Usuario insertado con exito";
            } else {
                return "Hubo un problema";
            }

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getReservasById($id)
    {
        try {
            $conex = ConnectionManager::getConnectionInstance();
            $rs = $conex->query("select reservas.id, reservas.uid, reservas.nombre, reservas.apellidos, reservas.numero_telefono, reservas.comensales, reservas.fecha, reservas.especificaciones
                                 FROM reservas
                                 LEFT JOIN Comentarios ON reservas.id = Comentarios.rid
                                 WHERE Comentarios.id IS NULL
                                 AND reservas.uid = $id");
            $reservas = [];
            if ($rs) {
                while ($r = $rs->fetchObject()) {
                    $reserva = new Reserva($r->id, $r->uid, $r->nombre, $r->apellidos, $r->numero_telefono, $r->comensales, $r->fecha, $r->especificaciones);
                    $reservas[] = $reserva;
                }
            }
            return $reservas;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

