<?php
include 'database.php';
    $sql = "select * from cars where make='" . $_POST['sc'] . "' and engine='" . $_POST['se'] . "'";
    $cars_result = mysqli_query($conn,$sql);
    if ($cars_result->num_rows > 0) { 
      while($car = $cars_result->fetch_assoc()) {
        $sql = "insert into parts (car_ID, description, price) values (" . $car['ID'] . ", '" . $_POST['description'] . "', " . $_POST['price'] . ")";
        $result = mysqli_query($conn,$sql);
      }
    }
$conn->close();
echo '<script>
        var selected_car="' . $_POST["sc"] . '";
        var selected_engine="' . $_POST["se"] . '";
      </script>';
?>

<script>
var parent_window = window.opener;
var parent_div = parent_window.document.getElementById('selected_parts');
fetch('parts.php?make='+selected_car+'&engine='+selected_engine)
          .then(response => response.text())
          .then(data => {
            parent_div.innerHTML = data;
          })
          .catch(error => {
              console.error("Error:", error);
          });

// wait for sql statement to be executed
setTimeout(close_window,100);

function close_window() {
  window.close();
};
</script>