<?php
require_once '../entidades/Categoria.php';
require_once '../interfaces/ICategoria.php';
require_once '../logica/LCategoria.php';

if ($_POST) {
    $cat = new Categoria();
    $cat->setIdCategoria($_POST['txtId']);
    $cat->setNombre($_POST['txtNom']);
    $cat->setIdFamilia($_POST['txtIdfam']);
    $log = new LCategoria();
    $log->modificar($cat);

    header("Location: cargarcategorias.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modificar Categoria</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h1>Modificar Categoria</h1>
<hr>

<form action="" method="post">
    <input type="number" name="txtId" placeholder="ID de categoria" required><br>
    <input type="text" name="txtNom" placeholder="Nombre" required><br>
    <input type="number" name="txtIdfam" placeholder="ID de familia" required><br><br>
    <input type="submit" value="Modificar">
</form>

</body>
</html>