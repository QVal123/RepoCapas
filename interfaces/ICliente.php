<?php
    require_once '../entidades/Cliente.php';
    interface ICliente{
        //Definimos nuestras firmas de métodos
        public function cargar();
        public function guardar(Cliente $cliente);
        public function borrar($idcli);
        
    }
?>