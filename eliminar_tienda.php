<?php
include('db.php');
$con = connection();

$Id = $_GET['Id'];

$sql = "DELETE FROM tienda WHERE Id='$Id'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}
?>