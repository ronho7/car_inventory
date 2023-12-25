<?php
include 'database.php';
$sql ='update cars set valid=0 where ID=' . $_REQUEST['ID'];
$result = mysqli_query($conn,$sql); 
$conn->close();
header('location:list.php');
?>