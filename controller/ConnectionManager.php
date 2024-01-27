<?php

class ConnectionManager extends PDO
{

    private static $conn;
    private $dsn = "mysql:host=localhost:3306;dbname=proyectodiw;charset=utf8mb4";
    private $username = "dwes";
    private $password = "abc1234.";

    public function __construct()
    {
        parent::__construct($this->dsn, $this->username, $this->password);
    }

    public static function getConnectionInstance()
    {
        try {
            if (self::$conn == null) {
                self::$conn = new ConnectionManager();
            }
            return self::$conn;
        } catch (PDOException $e) {
            die('No es posible cargar los contenidos');
        }
    }
}
