<?php
include("conexion.php");
$con=conectar();

$con=conectar();
$IF=$_POST['ID_Docente'];
$PN=$_POST['PrimerNombre'];
$SN=$_POST['SegundoNombre'];
$PA=$_POST['PrimerApellido'];
$SA=$_POST['SegundoApellido'];
$CO=$_POST['Correo'];
$CN=$_POST['Contracena'];


$sql="INSERT INTO Docentes VALUES('$IF','$PN','$SN','$PA','$SA','$CO','$CN')";

$query= mysqli_query($con,$sql);


if($query){
   
    ?>
    <?php
    INCLUDE("crearcuenta.html");
    ?>
    <?php
       echo"<script src='sweetAlertDDDS.js'> </script>"; 
    ?>
    <?php
}else {
    echo"<script src='sweetAlert.js'> </script>"; 
}
?>
<?php


?>