<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokningar</title>
</head>
<body>




<?php
include 'includes/config.php';
include'navbar.php';
?>
<h1>Dina bokningar</h1>    









<?php


$queryResult = $conn->query("SELECT * FROM bookings");

foreach ($queryResult as $row)

		{

			echo "<h1>";
			echo $row['booking_date'] . "<br>";
			echo "</h1>";
			echo "<p>";
			echo $row['booking_startime'] . "<br>"; 
			echo "<strong>".$row['booking_endtime']." - ";
			echo $row['booking_name'] . "</strong><br>";
            echo $row['booking_massage'] . "</strong><br>";
            echo $row['booking_number'] . "</strong><br>";
	
			echo "</p>";
		}


	
?>


<?php

include'footer.php';
?>

</body>
</html>