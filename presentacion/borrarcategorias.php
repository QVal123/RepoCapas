<?php
require_once '../logica/LCategoria.php';
require_once '../datos/DB.php';

if(isset($_GET['idcat'])){
    $idcat = $_GET['idcat'];

    $log = new LCategoria();
    $log->borrar($idcat);

    header('Location: cargarcategorias.php');
}
?>