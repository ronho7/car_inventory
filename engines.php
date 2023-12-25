<?php
include 'database.php'; 
$sql = "select engine from cars where make='" . $_REQUEST["make"] . "' group by engine";
$engine_result = mysqli_query($conn,$sql);
if ($engine_result->num_rows > 0) { 
    echo '<select name="engines" id="engines" onchange="load_selected_parts()">';
        echo '<option>Engine</option>';
    while($engine = $engine_result->fetch_assoc()) {
        echo '<option value=' . $engine['engine'] . '>' . $engine['engine'] . '</option>';
    }
    echo '</select>';
};
$conn->close();
?>


