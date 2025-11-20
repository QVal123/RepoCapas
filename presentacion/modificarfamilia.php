<?php
require_once '../entidades/Familia.php';
require_once '../interfaces/IFamilia.php';
require_once '../logica/LFamilia.php';

if ($_POST) {
    $fam = new Familia();
    $fam->setIdFamilia($_POST['txtId']);
    $fam->setNombre($_POST['txtNom']);
    $fam->setDescripcion($_POST['txtDes']);

    $log = new LFamilia();
    $log->modificar($fam);

    header("Location: cargarfamilias.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Familia</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h1>Modificar Familia</h1>
<hr>

<form action="" method="post">
    <input type="number" name="txtId" placeholder="Ingrese ID de familia" required><br>
    <input type="text" name="txtNom" placeholder="Modificar Nombre" required><br>
    <input type="text" name="txtDes" placeholder="Modificar Descripción" required><br><br>
    <input type="submit" value="Modificar">
</form>

</body>
</html>