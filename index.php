<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Inventory</title>
  <link rel="stylesheet" href="style/style.css"></link>
  <style>

    body {  
      background-color: rgb(22, 22, 22);
      border:0;
      padding: 0;
      margin: 0;
    }

    iframe {
      background-color: grey;
      border: none;
      color: white;
    }

    td {
      padding: 10px;
      font-weight: bold;
    }

    td:hover {
      background-color: blue;
    }

    td.clicked {
      background-color: blue;
    }

  </style>
</head>
<body>
  
<table width=100%>
  <tr>
    <td width=33% align=center onclick="cellClick(this); load_frame('car_inventory.php')"><font color=white>Car Inventory</td>
    <td width=33% align=center onclick="cellClick(this); load_frame('list.php')"><font color=white>Car List</td>
    <td width=33% align=center onclick="cellClick(this); load_frame('add.php')"><font color=white>Add Car</td>
  </tr>
</table>
<iframe id=content width=100% height=600px></iframe>

</body>
</html>
<script>
  function load_frame(page) {
    var frame = document.getElementById('content');
    frame.src = page;
  }

  function cellClick(cell) {
    // Remove 'clicked' class from all cells
    var cells = document.querySelectorAll('td');
    cells.forEach(function (item) {
      item.classList.remove('clicked');
    });

    // Add 'clicked' class to the clicked cell
    cell.classList.add('clicked');
  }
</script>