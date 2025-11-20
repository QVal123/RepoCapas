<?php
    require_once '../datos/DB.php';
    require_once '../entidades/Categoria.php';
    require_once '../interfaces/ICategoria.php';
    require_once '../entidades/Familia.php';
    class LCategoria implements ICategoria{
        public function cargar(){
            $db=new DB(); 
            $cn=$db->conectar(); 
            $sql="select * from categoria";
            $ps=$cn->prepare($sql); 
            $ps->execute();
            $filas=$ps->fetchAll();
            $categorias= array(); 
            foreach($filas as $f){ 
                $cat=new Categoria(); 
                $cat->setIdCategoria($f[0]);
                $cat->setNombre($f[1]);
                $cat->setIdFamilia($f[2]);
                array_push($categorias, $cat);
            }
            return $categorias;
        }

        public function guardar(Categoria $categoria){ //
            $db=new DB();
            $cn=$db->conectar();
            $sql="insert into categoria (nombre) values (:nom)";
            $ps=$cn->prepare($sql); 
            $ps->bindParam(':nom', $categoria->getNombre());
            $ps->execute();
            }
        public function borrar($idcat){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "DELETE FROM categoria WHERE idcategoria = ?";
            $ps = $cn->prepare($sql);
            $ps->execute([$idcat]);
        }
        public function modificar(Categoria $categoria){
            $db = new DB();
            $cn = $db->conectar();
            $sql = "UPDATE categoria SET nombre = :nom, idfamilia = :idfam WHERE idCategoria = :idcat";
            $ps = $cn->prepare($sql);
            $nom = $categoria->getNombre();
            $idfam = $categoria->getIdFamilia();
            $idcat = $categoria->getIdCategoria();
            $ps->bindParam(':nom', $nom);
            $ps->bindParam(':idfam', $idfam);
            $ps->bindParam(':idcat', $idcat);
            $ps->execute();
    }
    }
?>