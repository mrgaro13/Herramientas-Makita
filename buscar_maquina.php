
<?php


    $con= new mysqli("localhost", "root", "", "carbones") or die ("error de conexion");
    $salida = "";

    $query = "SELECT * FROM carbon ORDER by parte";

    if (isset($_POST['consulta'])) {
        $q = $con->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM carbon WHERE parte LIKE '%$q%' OR codigo LIKE '%$q%' OR maquinas LIKE '%$q%'";
    }

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
        $salida.="<table id='table-values' class='tabla_datos'>
                <thead>
                    <tr id='titulo'>
                        
                        <th width='70px'>CODIGO</th>
                        <th width='60px'>No. PARTE</th>
                        <th>MAQUINAS</th>
                        <th>ABRIR</th>
                    </tr>

                </thead>
                

        <tbody>";

        while ($fila = $resultado->fetch_assoc()) {
            $salida.= "<tr>
                        
                        <td>".$fila['codigo']."</td>
                        <td>".$fila['parte']."</td>
                        <td>".$fila['maquinas']."</td>
                        <td><a href=ver.php?id=".$fila['id'].">VER</a></td>
                        </tr>";

        }
        $salida.="</tbody></table>";
    }else{
        $salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $con->close();



?>