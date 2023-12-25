<style>
  input[type=text] {
    width: 70%;
  }
</style>
<?php
echo '<center><form method=post action=addnew.php>';
echo '<input type=text placeholder="Make" name=make autofocus><br>';
echo '<input type=text placeholder="Color" name=color ><br>';
echo '<input type=text placeholder="Year" name=year ><br>';
echo '<input type=text placeholder="Engine" name=engine ><br>';
echo '<input type=text placeholder="Transmission" name=transmission ><br><br>';
echo '<center><input width=20 type=submit></center>';
echo '</form></center>';
?>