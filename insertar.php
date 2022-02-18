<?php


include 'Config.php';

$con=conect();
var_dump($_POST);
$nombre=$_POST['NOMBRE'];
$edad=$_POST['EDAD'];
$sexo=$_POST['SEXO'];
$rol=$_POST['ROLID'];

$sql = "INSERT INTO usuarios(ID,NOMBRE,EDAD,SEXO,ROLID)VALUES('','$nombre','$edad','$sexo','$rol')";
$query=mysqli_query($con,$sql);
if($query){
    echo "<script>
    location.href = 'index.php'
    </script>";}
else{
    'incorrecto';
}


?>