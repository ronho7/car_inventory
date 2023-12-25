<?php
  // create a connection to database
  $servername = "localhost";
  $username = "root";
  $password = "Mycoding78@";
  $dbname = "autoshop";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  };
?>