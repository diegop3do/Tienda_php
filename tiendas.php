<?php
    include('./config/db.php');
    $con = connection(); 

    $sql = "SELECT * FROM tienda";

    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="tiendas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
    <nav class="navegador">
        <ul>
            <a href="index.php">Productos</a>
            <a href="tiendas.php">Tiendas</a>
            <a href="crear_tienda.php">Crear tiendas</a>
        </ul>
    </nav>
</header>
<body>
  <div class="contenedor_tiendas">
    <div class="contenedor_tabla_tiendas">
      <table class="table table-hover">
        <thead>
          <tr>
          <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de apertura</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
          <tr>
          <td ><?= $row['Id']?></td>
            <td ><?= $row['Nombre']?></td>
            <td ><?= $row['Fechas_de_apertura']?></td>
            
            <th><a href="eliminar_tienda.php?Id=<?=$row['Id']?>" class="btn btn-danger">eliminar</a></th>
            <th><a href="productos" class="btn btn-danger">Ver Productos</a></th>
          </tr> 
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>