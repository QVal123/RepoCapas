<?php
require_once '../entidades/Cliente.php';
require_once '../interfaces/ICliente.php';
require_once '../logica/LCliente.php';

if ($_POST) {
    $cli = new Cliente();
    $cli->setNombre($_POST['txtNom']);
    $cli->setIdCliente($_POST['txtId']);
    $cli->setApellidos($_POST['txtApe']);
    $cli->setDNI($_POST['txtDNI']);

    $log = new LCliente();
    $log->modificar($cli);

    header("Location: cargarclientes.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h1>Modificar Cliente</h1>
<hr>

<form action="" method="post">
    <input type="number" name="txtId" placeholder="Ingrese ID de cliente" required><br>
    <input type="text" name="txtNom" placeholder="Modificar Nombre" required><br>
    <input type="text" name="txtApe" placeholder="Modificar Apellido" required><br><br>
    <input type="text" name="txtDNI" placeholder="Modificar DNI" required><br><br>
    <input type="submit" value="Modificar">
</form>
</body>
</html>