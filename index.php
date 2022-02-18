<?php
        include("Config.php");

        $con=conect();

        $sql = "SELECT * FROM usuarios ";
        $query=mysqli_query($con,$sql);


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD USUARIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <a href="viewGrafico.php" class="btn btn-success">Grafico de usuarios</a>
        <div class="row">
            <div class="col-md-3">
                <h1>Formulario</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="Ingrese nombre de usuario...">
                        <br>
                        <input type="text" class="form-control mb-3" name="EDAD" placeholder="Ingrese edad...">
                        <br>
                        <input type="text" class="form-control mb-3" name="SEXO" placeholder="Ingrese SEXO...">
                        <br>
                        <input type="text" class="form-control mb-3" name="ROLID" placeholder="Ingrese Rol...">
                        <br>
                        <input type="submit" class="btn btn-primary">
                    </form>

            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>NOMBRE</th>
                            <th>EDAD</th>
                            <th>SEXO</th>
                            <th>ROL</th>
                            <th></th>
                            <th></th>
                        </tr>

                    </thead>

                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php echo $row['NOMBRE']?></th>
                                <th><?php echo $row['EDAD']?></th>
                                <th><?php echo $row['SEXO']?></th>
                                <th><?php echo $row['ROLID']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['ID']?>" class="btn btn-info">Actualizar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['ID']?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php 
                        }
                        ?>    
                    </tbody>

                </table>
            </div>

        </div>

    </div>

    
</body>
</html>