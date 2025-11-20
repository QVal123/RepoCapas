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
        <h1>Inserción de Categorias</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNom" placeHolder="Ingrese Nombre">
            <input type="text" name="txtIdFam" placeHolder="Ingrese IdFamilia">
            <br>
            <input type="submit" value="Guardar">
        </form>
    </div>
</body>
</html>

<?php
    require_once '../entidades/Categoria.php';
    require_once '../interfaces/ICategoria.php';
    require_once '../logica/LCategoria.php';
    if($_POST){
        $cat=new Categoria();
        $cat->setNombre($_POST['txtNom']);
        $cat->setIdFamilia($_POST['txtIdFam']);
        $log=new LCategoria();
        $log->guardar($cat);
        header('Location: cargarcategorias.php');
    }
?>