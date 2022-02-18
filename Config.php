<?php
function conect(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "my_database";

    $con= mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$database);

    return $con;
}
?>