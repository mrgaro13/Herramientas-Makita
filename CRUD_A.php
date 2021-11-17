
<?php

$con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbones</title>
    <link rel="shortcut icon" href="imagenes/LOGO_FRP.ico" />
    <link rel="stylesheet" type="text/css" href="style/CRUD_A.css">
</head>
<body>
    <?php
        include 'conexion.php';
        $sql="SELECT * FROM carbon";
        $result = mysqli_query($con,$sql);

    ?>
    <div id="main-container">
        <button title="Agregar nuevo Carbón" onClick="window.location='agregar.php'">Nuevo</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th style="width: 70px;">CODIGO</th> 
                    <th style="width: 60px;">No. PARTE</th> 
                    <th>MAQUINAS</th> 
                    <th COLSPAN="2">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['codigo'] ?></td> 
                    <td><?php echo $row['parte'] ?></td>
                    <td><?php echo $row['maquinas'] ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id'] ?>">Editar</a>
                    </td>
                    <td>
                        <a href="eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</a>
                    </td> 
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>