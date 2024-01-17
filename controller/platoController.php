<?php

class platoController
{
    static function getPlatoByTipo($tipo)
    {
        $conn = ConnectionManager::getConnectionInstance();
        try {
            $stmt = $conn->query("SELECT * FROM platos WHERE tipo = '$tipo'");

            $platos = array();
            while ($fila = $stmt->fetchObject()) {
                $plato = new plato($fila->id, $fila->uid, $fila->nombre, $fila->tipo, $fila->descripcion, $fila->imagen, $fila->precio);
                $platos[] = $plato;
            }
            return $platos;
        } catch (Exception $exc) {
            die('No es posible cargar los platos de la carta');
        }
    }
}
