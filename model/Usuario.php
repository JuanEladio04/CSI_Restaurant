<?php
class Usuario
{

    protected $id;
    protected $nombre;
    protected $apellidos;
    protected $email;
    protected $contrasena;
    protected $fecha_nacimiento;
    protected $codigo_postal;
    protected $pais;
    protected $numero_telefono;
    protected $imagen;
    protected $admin;

    public function __construct($id, $nombre, $apellidos, $email, $contrasena, $fecha_nacimiento, $codigo_postal, $pais, $numero_telefono, $imagen, $admin)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->contrasena = $contrasena;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->codigo_postal = $codigo_postal;
        $this->pais = $pais;
        $this->numero_telefono = $numero_telefono;
        $this->imagen = $imagen;
        $this->admin = $admin;
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


?>