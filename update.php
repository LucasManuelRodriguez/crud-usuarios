<?php
include 'Config.php';

$con=conect();
$id=$_REQUEST['ID'];
$nombre=$_POST['NOMBRE'];
$edad=$_POST['EDAD'];
$sexo=$_POST['SEXO'];
$rol=$_POST['ROLID'];

$sql = "UPDATE usuarios SET NOMBRE='$nombre',EDAD='$edad',SEXO='$sexo',ROLID='$rol' WHERE ID='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
else{
    'incorrecto';
}



?>