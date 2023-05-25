<?php 
    include('db.php');
    $con = connection();

$Id = null;
$Nombre = $_POST['Nombre'];
$Fechas_de_apertura = $_POST['Fechas_de_apertura']; 

$sql = "INSERT INTO tienda VALUES('$Id', '$Nombre', '$Fechas_de_apertura')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>