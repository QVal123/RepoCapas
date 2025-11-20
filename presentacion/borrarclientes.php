<?php
require_once '../logica/LCliente.php';
require_once '../datos/DB.php';

if(isset($_GET['idcli'])){
    $idcli = $_GET['idcli'];

    $log = new LCliente();
    $log->borrar($idcli);

    header('Location: cargarclientes.php');
}
?>