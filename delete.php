<?php 
include 'Config.php';

$con=conect();
var_dump($_POST);
$id=$_REQUEST['id'];
$sql = "DELETE FROM usuarios WHERE ID='$id'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: index.php");
}
else{
    'incorrecto';
}

?>