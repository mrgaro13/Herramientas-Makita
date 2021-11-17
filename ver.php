<?php 

$con= new mysqli("localhost", "root", "", "carbones") or die ("error de conexion");

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

	if ($id == 1) {
  	header ("Location: No_Carbones/CB-75.html");
   }
   if ($id == 2) {
   	header ("Location: No_Carbones/CB-458.html");
   }
   if ($id == 3) {
  	header ("Location: No_Carbones/CB-440.html");
   }
   if ($id == 4) {
   	header ("Location: No_Carbones/CB-408.html");
   }
   if ($id == 5) {
  	header ("Location: No_Carbones/CB-407.html");
   }
   if ($id == 6) {
   	header ("Location: No_Carbones/CB-351.html");
   }
   if ($id == 7) {
  	header ("Location: No_Carbones/CB-350.html");
   }
   if ($id == 8) {
   	header ("Location: No_Carbones/CB-325.html");
   }
   if ($id == 9) {
   	header ("Location: No_Carbones/CB-303.html");
   }
   if ($id == 10) {
   	header ("Location: No_Carbones/CB-204.html");
   }
   if ($id == 11) {
   	header ("Location: No_Carbones/CB-203.html");
   }
   if ($id == 12) {
   	header ("Location: No_Carbones/CB-175.html");
   }
   if ($id == 13) {
   	header ("Location: No_Carbones/CB-154.html");
   }
   if ($id == 14) {
   	header ("Location: No_Carbones/CB-153.html");
   }
   if ($id == 15) {
   	header ("Location: No_Carbones/CB-107.html");
   }
   if ($id == 16) {
   	header ("Location: No_Carbones/CB-124.html");
   }
   if ($id == 17) {
    header ("Location: No_Carbones/CB-218.html");
   }
}
 }

?>