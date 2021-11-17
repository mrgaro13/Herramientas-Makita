
<?php

$con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramientas</title>
    <link rel="shortcut icon" href="imagenes/icon-t.png" />
    <link rel="stylesheet" type="text/css" href="style/buscar_maquina.css">

    <style type="text/css">
        #img_excel{
            width: 60px;
            height: 60px;
            margin-bottom: -25px;
            margin-left: 25px;
        }
    </style>

</head>
<body>
    <div id="container">
        
        <div id="left">

            <img id="img_ferre" src="imagenes/GSR.png">

        </div>

        <div id="center">
            <center><h3><strong>Buscador de Maquinas</strong></h3></center>
            <br>
            <label><strong>Buscar:</strong></label>
                <input type="text" class="buscar" name="caja_busqueda" id="caja_busqueda">
                <span title="Descargar en Excel"><a id="excel" href="excel_cm.php"><img id="img_excel" src="imagenes/excel-icon.png" /></a></span>
                <br><br>
                <div id="datos"></div>
        </div>

        <div id="right">
            <img id="img_ferre" src="imagenes/GSR.png">
            <br><br><br>
            <div>
                <strong id="carbones">BUSCADOR DE CARBONES</strong><br><br>
                    <a href="buscador.php"><img src="imagenes/buscador.png" id="img_busqueda"> </a>
            </div>
            <br><br>
            <div id="uno">
               <strong id="carbones">LISTA DE CARBONES</strong><br><br>
               <a href="index.html"><img src="imagenes/carbones6A.png" id="img_carbones"> </a>
            </div>
            
        </div>
                


    </div>

<div id="main-container">
    
</div>



   <!-- <?php
        include 'conexion.php';
        $sql="SELECT * FROM carbon";
        $result = mysqli_query($con,$sql);


    ?>
    <div id="main-container">
        <label>Buscar:</label>
        <input type="text" name="caja_busqueda" id="caja_busqueda">
        <div id="datos"></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th> 
                    <th>No. PARTE</th>
                    <th>MAQUINAS</th>                     
                    <th>ABRIR</th> 
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
                        <a href="ver.php?id=<?php echo $row['id'] ?>">Abrir</a>
                    </td> 
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>

    
-->

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/buscar_maquina.js"></script>
</body>

</html>