<?php
    require_once '../datos/DB.php';
    require_once '../entidades/Cliente.php';
    require_once '../interfaces/ICliente.php';
    class LCliente implements ICliente{
        public function cargar(){
            $db=new DB(); //declaramos nuestra instancia DB para consumir el método conectar
            $cn=$db->conectar(); //obtenemos la conexión que retorna nuestro método
            $sql="select * from cliente"; //consulta a ejecutar
            $ps=$cn->prepare($sql); //preparamos la query
            $ps->execute(); //ejecutamos la query
            $filas=$ps->fetchAll(); //obtenemos todas las filas de la ejecución
            $clientes= array(); //declaramos una lista de tamaño dinámico
            foreach($filas as $f){ //iteramos nuestras filas
                $cli=new Cliente(); //declaramos un objeto de tipo familia para setearle nuestra fila
                $cli->setIdCliente($f[0]);
                $cli->setNombre($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDNI($f[3]);
                array_push($clientes, $cli); //agregamos nuestro objeto con la fila seteada a nuestra lista de familias
            }
            return $clientes; //devolvemos el listado de familias poblado
        }

        public function guardar(Cliente $cliente){
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into cliente (nombres, apellidos, dni) values (:nom, :ape , :dni)";
            $ps=$cn->prepare($sql);
            $ps->bindParam(':nom', $cliente->getNombre());
            $ps->bindParam(':ape', $cliente->getApellidos());
            $ps->bindParam(':dni', $cliente->getDNI());
            $ps->execute();
        }
        public function borrar($idcli){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "DELETE FROM cliente WHERE idcliente = ?";
            $ps = $cn->prepare($sql);
            $ps->execute([$idcli]);
        }
        public function modificar(Cliente $cliente){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "UPDATE cliente SET nombres = :nom, apellidos = :ape, dni = :dni  WHERE idCliente = :idcli";
            $ps = $cn->prepare($sql);
            $nom = $cliente->getNombre();
            $ape = $cliente->getApellidos();
            $dni = $cliente->getDNI();
            $id  = $cliente->getIdCliente();
            $ps->bindParam(':nom', $nom);
            $ps->bindParam(':ape', $ape);
            $ps->bindParam(':dni', $dni);
            $ps->bindParam(':idcli', $id);
            $ps->execute();
        }
    }
?>