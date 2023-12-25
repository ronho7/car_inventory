<?php
echo '<form method=post action=partssave.php>';
echo '<input type=hidden name=sc value=' . $_REQUEST['sc'] . '>';
echo '<input type=hidden name=se value=' . $_REQUEST['se'] . '>';
echo '<center><input type=text placeholder="Description" name=description autofocus></center><br>';
echo '<center><input type=text placeholder="Price" name=price ></center><br>';
echo '<center><input width=20 type=submit></center>';
echo '</form>';
?>