<head>
  <link rel="stylesheet" href="style/style.css"></link>
  <style>
    table {
      background-color: white;
    }
    
    td, th {
      padding: 2px 5px;
    }
  </style>
</head>
<?php

include 'database.php';
    // retrieve data
    $sql = "select * from cars where valid=1";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) { 
      echo '<center><table>';
        echo '<tr>';
          echo '<th>Make</th>';
          echo '<th>Color</th>';
          echo '<th>Year</th>';
          echo '<th>Delete</th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()) {
          echo '<tr>';
          // this is working          
          // echo '<td><a href=details.php?ID=' . $row['ID'] . '>' . $row['make'] . '</a></td>';
          echo '<td><a href=update.php?ID=' . $row['ID'] . '>' . $row['make'] . '</a></td>';
          echo '<td>' . $row['color'] . '</td>';
          echo '<td>' . $row['year'] . '</td>';
          echo '<td><center><a href=delete.php?ID=' . $row['ID'] . '><img width=20px src=img/delete.png></a></center></td>';
          echo '</tr>';
        };
      echo '</table></center>';
    };

$conn->close();
?>