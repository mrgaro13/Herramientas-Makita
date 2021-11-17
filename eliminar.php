<?php

$con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");

?>
<?php 

include 'conexion.php';
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $query = "DELETE FROM carbon WHERE id='".$id."'";
    mysqli_query($con,$query);
    echo "<script>
            alert('Registro Eliminado con Exito!!');
            window.location= 'CRUD_A.php'
            </script>";
 }

?>
