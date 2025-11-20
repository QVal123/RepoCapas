<?php
    class Cliente{
        private $idcliente;
        private $nombres;
        private $apellidos;
        private $dni;      
        public function getIdCliente(){
            return $this->idcliente;
        }
        public function setIdCliente($idcliente){
            $this->idcliente=$idcliente;
        }
        public function getNombre(){
            return $this->nombres;
        }
        public function setNombre($nombres){
            $this->nombres=$nombres;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }
        public function getDNI(){
            return $this->dni;
        }
        public function setDNI($dni){
            $this->dni=$dni;
        }
    }
?>