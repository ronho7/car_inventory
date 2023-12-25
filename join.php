<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join 2 tables</title>
  <link rel="stylesheet" href="style/style.css"></link>
  <style>
    body {
      background-color: grey;
      color: white;
    }

    td, th {
      padding: 2px 4px;
      border-color: black;
    }
  </style>
</head>
<body>
  <?php
    include 'database.php';
    $sql = "SELECT cars.make, cars.engine, cars.year, parts.price, parts.description FROM cars INNER JOIN parts ON cars.ID=parts.car_ID ORDER BY cars.make, cars.engine, cars.year, parts.description";
    $row_result = mysqli_query($conn, $sql);
    if ($row_result->num_rows > 0) {
      echo '<table>';
        echo '<tr>';
          echo '<th>Make</th>';
          echo '<th>Engine</th>';
          echo '<th>Year</th>';
          echo '<th>Price</th>';
          echo '<th>Description</th>';
        echo '</tr>';
        $currentmake=""; // added
        $currentengine=""; // added 
        $currentyear=""; // added
        while ($row = $row_result-> fetch_assoc()) {
          echo '<tr>';
            if($row["make"]<>$currentmake) {  
              echo '<td>' . $row['make'] . '</td>'; 
              $currentmake=$row['make'];  
            } else {  
              echo '<td></td>';  
            };

            if($row["engine"]<>$currentengine) {  
              echo '<td>' . $row['engine'] . '</td>'; 
              $currentengine=$row['engine'];  
            } else {  
              echo '<td></td>';  
            };

            if($row["year"]<>$currentyear) {  
              echo '<td>' . $row['year'] . '</td>'; 
              $currentyear=$row['year'];  
            } else {  
              echo '<td></td>';  
            };
            
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['description'] . '</td>';
          echo '</tr>';
        };
      echo '</table>';
    };
    $conn->close();
  ?>
</body>
</html>
