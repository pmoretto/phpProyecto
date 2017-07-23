<?php
    class modelProductos{
        private $db;
        private $productos;

        public function __construct(){
            require_once("conexion.php");
            $this->db = conexion::conexion();
            $this->productos = array();
        }

        public function getProductos(){
            $query = $this->db->query("SELECT * FROM PRODUCTOS");
            while ($filas = $query->fetch(PDO::FETCH_ASSOC)){
                $this->productos[] = $filas;
            }
            return $this->productos;
        }
    }
?>