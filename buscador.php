
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
    <link rel="shortcut icon" href="imagenes/carbon-brush.png" />
    <link rel="stylesheet" type="text/css" href="style/CRUD_A.css">

    <style type="text/css">
       /* #excel{
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 0px;
            height: 36px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; 
            transition-duration: 0.4s;
        }
        #excel:hover {
            background-color: #555555;
            color: white;
        } 
        */
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


            <img id="img_ferre" src="imagenes/GS3.png">
            <h3><strong>Buscador de Carbones</strong></h3>
            
        </div>

        <div id="center">

            <br>
            <label><strong>Buscar:</strong></label>
                <input type="text" class="buscar" name="caja_busqueda" id="caja_busqueda">
                <span title="Descargar en Excel"><a id="excel" href="excel_c.php"><img id="img_excel" src="imagenes/excel-icon.png" /></a></span>
                <br><br>
                <div id="datos"></div>
        </div>

        <div id="right">
            <br><br>
            <div id="uno">
               <strong id="carbones">CARBONES</strong><br><br>
               <a href="index.html"><img src="imagenes/carbones6.png" id="img_carbones"> </a>
            </div><br><br>
            <div id="dos">
                <strong id="maquinas">BUSCAR MAQUINAS</strong><br><br>
                <a href="maquinas.php"><img src="imagenes/makita.jpg" id="img_makita"></a>
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
    <script type="text/javascript" src="js/buscar_carbon.js"></script>
</body>

</html>