<?php
include 'Config.php';

$con=conect();
$id= $_REQUEST['id'];

$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
            <div class="container mt-5">
                <h1>Actualizar</h1>
                    <form action="update.php" method="POST">
                        <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
                        <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="Ingrese nombre de usuario..." value="<?php echo $row['NOMBRE'] ?>">
                        <br>
                        <input type="text" class="form-control mb-3" name="EDAD" placeholder="Ingrese edad..." value="<?php echo $row['EDAD'] ?>" >
                        <br>
                        <input type="text" class="form-control mb-3" name="SEXO" placeholder="Ingrese SEXO..." value="<?php echo $row['SEXO'] ?>">
                        <br>
                        <input type="text" class="form-control mb-3" name="ROLID" placeholder="Ingrese Rol..." value="<?php echo $row['ROLID'] ?>">
                        <br>
                        <input type="submit" class="btn btn-primary" value="ACTUALIZAR">
                    </form>

            </div>
    
</body>
</html>