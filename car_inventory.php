<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style.css"></link>
</head>
<style>
    label {
        display: block;
        font-weight: bold;
    }

    select {
        display: block;
    }
</style>
<body>
<?php

    $car = "Ford";
    include 'database.php';
    // retrieve data
    $sql = "select make from cars group by make";
    $cars_result = mysqli_query($conn,$sql);
    if ($cars_result->num_rows > 0) {
        echo '<label for="cars" style="color: white; font-family: Arial">Select a model</label><br>';
        echo '<select name="cars" id="cars" onchange="load_selected_car()">';
            echo '<option>...</option>';
        while($car = $cars_result->fetch_assoc()) {
            echo '<option value=' . $car['make'] . '>' . $car['make'] . '</option>';
        }
        echo '</select>';
    };
    $conn->close();
    
?>  

    <br><br>
    <!-- define an area displaying the results of selection (already defined)-->
    <div id="selected_car"></div>
    <div id="selected_parts"></div>
    
</body>
</html>
<script>

    function load_selected_car() {
        // Get the selected option value
        var car = document.getElementById("cars");
        var selected_car = cars.options[cars.selectedIndex].value;
        var display_area = document.getElementById("selected_car");

        // Use fetch to load the selected content into the div
        fetch('engines.php?make='+selected_car)
            .then(response => response.text())
            .then(data => {
                display_area.innerHTML = data;
            })
            .catch(error => {
                console.error("Error:", error);
            });
    };

    function load_selected_parts() {
        var engines = document.getElementById("engines");
        var selected_engine = engines.options[engines.selectedIndex].value;
        var car = document.getElementById("car");
        var selected_car = cars.options[cars.selectedIndex].value;

        var display_area = document.getElementById("selected_parts");

        /* Get text from URLs
        const searchParams = new URLSearchParams(window.location.search);
        var make = searchParams.get('make');
        */

        // Use fetch to load the selected content into the div
        fetch('parts.php?make='+selected_car+'&engine='+selected_engine)
            .then(response => response.text())
            .then(data => {
                display_area.innerHTML = data;
            })
            .catch(error => {
                console.error("Error:", error);
            });
    };

    function add_parts() {
        var selected_engine = engines.options[engines.selectedIndex].value;
        var selected_car = cars.options[cars.selectedIndex].value;
        window.open("addparts.php?se="+selected_engine+"&sc="+selected_car,"","top=200,left=300,width=500,height=400");
    };

</script>