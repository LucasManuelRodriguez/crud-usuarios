<?php
include 'Config.php';

$con=conect();
$sql = "SELECT SEXO, COUNT(*) FROM usuarios
GROUP BY SEXO";

$query=mysqli_query($con,$sql);
foreach ($query as $row) {
  $sexo[]=$row['SEXO'];
  $dato[]=$row['COUNT(*)'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafico de torta</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>
  
   <div class="container center">
        <a href="index.php" class="btn btn-success">Volver a inicio</a>
        <div id="chart"></div>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    let nombre = <?php echo json_encode($sexo)?>;
    let cantidad = <?php echo json_encode($dato)?>;


    let nombres=[];
    let cantidades=[];
    
    cantidad.forEach((e)=>{
      cantidades.push(e)
    })
    nombre.forEach((e) => {
      nombres.push(e)
    });

  </script>
  <script src="grafico.js"></script>
</body>
</html>