<?php

class ConnectionManager extends PDO {

    private static $conn;
    private $dsn = "mysql:host=localhost:3306;dbname=csi;charset=utf8mb4";
    private $username = "dwes";
    private $password = "abc123.";

    public function __construct() {
        parent::__construct($this->dsn, $this->username, $this->password);
    }

    public static function getConnectionInstance() {
        if (self::$conn == null) {
            self::$conn = new ConnectionManager();
        }
        return self::$conn;
    }
}
