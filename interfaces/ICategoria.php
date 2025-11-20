<?php
    require_once '../entidades/Categoria.php';
    interface ICategoria{
        //Definimos nuestras firmas de métodos
        public function cargar();
        public function guardar(Categoria $categoria);
        public function borrar($idcat);
    }
?>