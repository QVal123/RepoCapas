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
        <h1>Módulo de Clientes</h1>
        <hr>
        <a href="guardarclientes.php">Crear Nuevo</a>
        <?php
            require_once '../entidades/Cliente.php';
            require_once '../interfaces/ICliente.php';
            require_once '../logica/LCliente.php';
            $log=new LCliente();
            $clientes= $log->cargar();
        ?>
        <table border='1'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Modificar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($clientes as $cli){
                ?> 
                <tr>
                    <td><?=$cli->getIdCliente()?></td>
                    <td><?=$cli->getNombre()?></td>
                    <td><?=$cli->getApellidos()?></td>
                    <td><?=$cli->getDNI()?></td>

                    <td><a href="modificarcliente.php">Modificar</a></td>
                    <td><a href="borrarclientes.php?idcli=<?=$cli->getIdCliente()?>">Borrar</a></td>

                </tr>
                <?php
                    }       
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>