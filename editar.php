<?php

$con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");

?>
<?php 

include 'conexion.php';

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $query = "SELECT * FROM carbon WHERE id='".$id."'";
     
        $result = mysqli_query($con,$query);
       while($fila = mysqli_fetch_assoc($result)) {   
        /*                           
        $query = "SELECT * FROM encuestador WHERE id_encuestador = '$id'";
        $result = $mysqli->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        */



?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style/formulario_editar.css">
</head>
<body>
    <div class="center-content">
        <form action="" method="GET">
        <input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
            Codigo: <input type="text" class="fielda" name="txtcodigo" id="codigo" required value="<?php echo $fila['codigo'] ?>"><br><br>
            No. Parte:<input type="text" name="txtparte" id="parte" class="fielda" required value="<?php echo $fila['parte'] ?>"> <br><br>
            Maquinas: <textarea id="area" name="txtmaquinas" class="fielda" rows="6" cols="37" required><?php echo $fila['maquinas'] ?></textarea> <br> <br>
            <input type="submit" class="btn btn-green" value="Actualizar Registro">
            <input type="button" class="btn btn-red" name="" value="Cancelar" onclick="location.href='CRUD_A.php'">
        </form>
       <?php  } }  ?>
    </div>
</body>
</html>



<?php 

if(isset($_GET['txtcodigo'])&&(isset($_GET['txtparte']))){
    $idp=$_GET['txtid'];
    $codigo = $_GET['txtcodigo'];
    $parte = $_GET['txtparte'];
    $maquinas = $_GET['txtmaquinas'];
    $sql2 = "UPDATE carbon SET codigo='".$codigo."', parte='".$parte."', maquinas='".$maquinas."' WHERE id='".$idp."'";
    mysqli_query($con,$sql2);
   if($codigo=1){
        echo "<script>
            alert('Registro Modificado con Exito!!');
            window.location= 'CRUD_A.php'
            </script>";
    }
}

?>






