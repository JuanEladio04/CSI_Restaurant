<?php
class comentario
{

    protected $id;
    protected $rid;
    protected $comentario;
    protected $fecha;
    protected $hora;
    protected $valoracion;

    public function __construct($id, $rid, $comentario, $fecha, $hora, $valoracion) {
        $this->id = $id;
        $this->rid = $rid;
        $this->comentario = $comentario;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->valoracion = $valoracion;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
