<style>
  body {
    font-family: Arial, Helvetica, sans-serif;    
    color: white;
  }

  td {
    padding: 1px 8px;
  }
</style>
<div>
  <br>
<?php
  include 'database.php';
  $sql = "select * from cars where make='" . $_REQUEST['make'] . "' and engine='" . $_REQUEST['engine'] . "'";
  $cars_result = mysqli_query($conn,$sql);
  if ($cars_result->num_rows > 0) { 
    while($car = $cars_result->fetch_assoc()) {
      $sql = "select * from parts where car_ID=" . $car['ID'] . "";
      $parts_result = mysqli_query($conn,$sql);
      if ($parts_result->num_rows > 0) { 
        echo '<table>';
        while($parts = $parts_result->fetch_assoc()) {
          echo '<tr>';
          echo '<td>' . $parts['description'] . '</td>';
          echo '<td align=right>' . $parts['price'] . '</td>';
          echo '</tr>';
        };
        echo '</table>';
      }
    }
  }
  $conn->close();
?>
    <button onclick="add_parts()">Add Parts</button>

</div>