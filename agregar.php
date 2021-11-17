<?php

$con=mysqli_connect("localhost", "root", "", "carbones") or die ("error de conexion");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Agregar</title>
    <link rel="stylesheet" type="text/css" href="style/formulario_agregar.css">
</head>
<body>
    <div class="center-content">
        <form>
        <label class="titulo">Codigo: </label><br>
            <input type="text" name="txtcodigo" class="fielda" placeholder="Ingresar el codigo del articulo"><br><br>
        <label class="titulo">No. Parte: </label><br>
            <input type="text" name="txtparte" class="fielda" placeholder="Ingresar el numero de parte" required="">
        <label class="titulo">Maquinas: </label><br>
            <textarea name="txtmaquinas" class="fielda" rows="6" cols="37" placeholder="Ingresar maquinas compatibles con el carbón" required></textarea> <br><br>

        <div >
            <input type="submit" value="Guardar Registro" class="btn btn-green" required="">
            <input type="button" class="btn btn-red" name="" value="Cancelar" onclick="location.href='CRUD_A.php'">
        </div>
        </form>
    </div>
</body>
</html>

<?php 
include 'conexion.php';

if(isset($_GET['txtcodigo'])&&(isset($_GET['txtparte']))){
        $codigo = $_GET['txtcodigo'];
        $parte = $_GET['txtparte'];
        $maquinas = $_GET['txtmaquinas'];
        $sql = "INSERT INTO carbon (codigo,parte,maquinas) VALUES ('$codigo','$parte','$maquinas')";
        mysqli_query($con,$sql);
        if($codigo=1){
            echo "<script>
                alert('Registro Guardado con Exito!!');
                window.location= 'CRUD_A.php'
                </script>";
        }
    }
?>

