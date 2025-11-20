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
        <h1>Módulo de Categorias</h1>
        <hr>
        <a href="guardarcategoria.php">Crear Nuevo</a>
        <?php
            require_once '../entidades/Categoria.php';
            require_once '../interfaces/ICategoria.php';
            require_once '../logica/LCategoria.php';
            $log=new LCategoria();
            $categorias= $log->cargar();
        ?>
        <table border='1'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>IdFamilia</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($categorias as $cat){
                ?> 
                <tr>
                    <td><?=$cat->getIdCategoria()?></td>
                    <td><?=$cat->getNombre()?></td>
                    <td><?=$cat->getIdFamilia()?></td>

                    <td><a href="modificarcategoria.php">Modificar</a></td>
                    <td><a href="borrarcategorias.php?idcat=<?=$cat->getIdCategoria()?>">Borrar</a></td>
                </tr>
                <?php
                    }       
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>