<?php
include 'database.php';
$sql  ="insert into cars (make, year, color, engine, transmission) values (";
$sql .="'" . $_POST['make'] . "',";
$sql .=$_POST['year'] . ","; // numbers do not need quotes
$sql .="'" . $_POST['color'] . "',";
$sql .="'" . $_POST['engine'] . "',";
$sql .="'" . $_POST['transmission'] . "')";
$result = mysqli_query($conn,$sql);
$conn->close();
header('location:list.php');
?>