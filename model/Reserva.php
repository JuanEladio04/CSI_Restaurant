<?php

class Reserva{

    private $uid;
    private $nombre;
    private $apellidos;
    private $numero_telefono;
    private $comensales;
    private $fecha;
    private $especificaciones;

    public function __construct($usuId, $nom, $apel, $telef, $comensal, $fecha, $espec){
        $this->uid = $usuId;
        $this->nombre = $nom;
        $this->apellidos = $apel;
        $this->numero_telefono = $telef;
        $this->comensales = $comensal;
        $this->fecha = $fecha;
        $this->especificaciones = $espec;
    }

    public function __get($name){
        return $this->$name;
    }

    public function __set($name, $value){
        return $this->$name = $value;
    }
}    
?>