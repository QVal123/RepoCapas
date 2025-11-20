<?php
require_once '../logica/LFamilia.php';
require_once '../datos/DB.php';

if(isset($_GET['idfam'])){
    $idfam = $_GET['idfam'];

    $log = new LFamilia();
    $log->borrar($idfam);

    header('Location: cargarfamilias.php');
}
?>

