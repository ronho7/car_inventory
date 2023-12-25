<?php
echo '<form method=post action=doupdate.php>';
include 'database.php';
$sql = "select * from cars where ID=" . $_REQUEST['ID'];
$result = mysqli_query($conn,$sql);
if ($result->num_rows > 0) { 
  while($row = $result->fetch_assoc()) {
    echo '<input type=hidden name=ID value=' . $row['ID'] . '>';
    echo '<input type=text name=make value=' . $row['make'] . '><br>';
    echo '<input type=text name=color value=' . $row['color'] . '><br>';
    echo '<input type=text name=year value=' . $row['year'] . '><br>';
    echo '<input type=text name=engine value=' . $row['engine'] . '><br>';
    echo '<input type=text name=transmission value=' . $row['transmission'] . '><br>';
  }
};
$conn->close();
echo '<input type=submit>';
echo '</form>';
?>