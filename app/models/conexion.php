<?php

class Conexion {
    private $conexion;

    public function __construct() {
        $config = include('../../config/config.php');

        $this->conexion = new mysqli(
            $config['db']['host'],
            $config['db']['user'],
            $config['db']['password'],
            $config['db']['database']
        );

        if ($this->conexion->connect_error) {
            die("Error de Conexión: " . $this->conexion->connect_error);
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function closeConexion() {
        $this->conexion->close();
    }
}

?>