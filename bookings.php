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
include 'navbar.php';
?>
<h1>Dina bokningar</h1>    








<h2 class="p-3">Todaysbookings</h2>
<?php

$tomorrowunix = strtotime("+1 day");
$todaysdate = date('Y-m-d');
$tommorowDate = date("Y-m-d", $tomorrowunix);
$queryResult = $conn->prepare("SELECT * FROM bookings WHERE booking_date = :todaysdate");
$queryResult->bindParam(':todaysdate', $todaysdate, PDO::PARAM_STR);
$queryResult->execute();
foreach ($queryResult as $row){

  

		
     
?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Starttid</th>
      <th scope="col">Sluttid</th>
      <th scope="col">Namn</th>
      <th scope="col">Massagetyp</th>
      <th scope="col">Telefonnummer</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $row['booking_date']; ?></td>
      <td><?php echo $row['booking_startime']; ?></td>
      <td><?php echo $row['booking_endtime']; ?></td>
      <td><?php echo $row['booking_name']; ?></td>
      <td><?php echo $row['booking_massage']; ?></td>
      <td><?php echo $row['booking_number']; ?></td>
    </tr>
   
  </tbody>
</table>



<?php		

}
?>
<h2 class="p-3">Tommorowsbookings</h2>
<?php

$tommorowqueryresults = $conn->prepare("SELECT * FROM bookings WHERE booking_date = :tommorowDate");
$tommorowqueryresults->bindParam(':tommorowDate', $tommorowDate, PDO::PARAM_STR);
$tommorowqueryresults->execute();

foreach ($tommorowqueryresults as $row){

  

		
     
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Starttid</th>
      <th scope="col">Sluttid</th>
      <th scope="col">Namn</th>
      <th scope="col">Massagetyp</th>
      <th scope="col">Telefonnummer</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $row['booking_date']; ?></td>
      <td><?php echo $row['booking_startime']; ?></td>
      <td><?php echo $row['booking_endtime']; ?></td>
      <td><?php echo $row['booking_name']; ?></td>
      <td><?php echo $row['booking_massage']; ?></td>
      <td><?php echo $row['booking_number']; ?></td>
    </tr>
   
  </tbody>
</table>

<?php		

}

?>
<h2 class="p-3">All future bookings</h2>
<?php

$allbookings = $conn->prepare("SELECT * FROM bookings WHERE booking_date > :todaysdate");
$allbookings->bindParam(':todaysdate', $todaysdate, PDO::PARAM_STR);
$allbookings->execute();
foreach ($allbookings as $row){

  

		
     
  ?>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Datum</th>
        <th scope="col">Starttid</th>
        <th scope="col">Sluttid</th>
        <th scope="col">Namn</th>
        <th scope="col">Massagetyp</th>
        <th scope="col">Telefonnummer</th>
      </tr>
    </thead>
  
    <tbody>
      <tr>
        <td><?php echo $row['booking_date']; ?></td>
        <td><?php echo $row['booking_startime']; ?></td>
        <td><?php echo $row['booking_endtime']; ?></td>
        <td><?php echo $row['booking_name']; ?></td>
        <td><?php echo $row['booking_massage']; ?></td>
        <td><?php echo $row['booking_number']; ?></td>
      </tr>
     
    </tbody>
  </table>
  
  <?php		
  
  }
?>

<?php

include'footer.php';
?>

</body>
</html>