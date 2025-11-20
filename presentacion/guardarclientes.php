<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Clientes</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Ingrese Nombre">
            <input type="text" name="txtApe" placeHolder="Ingrese Apellidos">
            <input type="text" name="txtDNI" placeHolder="Ingrese DNI">
            <br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>

<?php
    require_once '../entidades/Cliente.php';
    require_once '../interfaces/ICliente.php';
    require_once '../logica/LCliente.php';
    if($_POST){
        $cli=new Cliente();
        $cli->setNombre($_POST['txtNom']);
        $cli->setApellidos($_POST['txtApe']);
        $cli->setDNI($_POST['txtDNI']);
        $log=new LCliente();
        $log->guardar($cli);
        header('Location: cargarclientes.php');
    }
?>