<?php
class plato
{

    protected $id;
    protected $uid;
    protected $nombre;
    protected $tipo;
    protected $descripcion;
    protected $imagen;
    protected $precio;

    public function __construct($id, $uid, $nombre, $tipo, $descripcion, $imagen, $precio) {
        $this->id = $id;
        $this->uid = $uid;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->precio = $precio;
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
