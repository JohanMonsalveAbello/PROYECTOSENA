<?php
include("conexion.php");
$con=conectar();

$con=conectar();
$Id=$_POST['ID_Docente'];
$CO=$_POST['Correo'];
$CN=$_POST['Contracena'];



$sql="INSERT INTO usuarios VALUES('$CO','$CN',$Id)";

$query= mysqli_query($con,$sql);


if($query){
    ?>
     <?php
    include("crearcuenta.html");
    ?>
        <?php
       echo"<script src='sweetAlertDD2.js'> </script>"; 
    ?>
     <?php
}else {
    ?>
    <?php
    include("crearcuenta.html");
  ?>

  <?php 
   echo"<script src='sweetAlert.js'> </script>";
  //echo"<scripr> alert("Error de ingreso"); </script>"
  ?>
  <?php
}

?>