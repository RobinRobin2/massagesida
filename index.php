<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Massagesida</title>
</head>
<body>

<?php
include'navbar.php';


include 'includes/config.php';
$todaysdate = date('Y-m-d');


if(isset($_POST['booking-submit'])){
	

$bokningsdatum = $_POST['booking_date'];
$bokningstartid = $_POST['booking_startime'];
$bokningsslutid = $_POST['booking_endtime'];
$massagetype = $_POST['booking_massage'];
$bokningsnamn = $_POST['booking_name'];
$bokningsnummer = $_POST['booking_number'];

if ($bokningsdatum < $todaysdate) {
    $error = "Please do not choose a date from the past";
    echo $error;
} 

else {
$stmt_insertPerson = $conn->prepare("INSERT INTO bookings(booking_date, booking_startime,  booking_endtime, booking_massage, booking_name, booking_number)values(:bokningsdatum2, :bokningsstartid2,  :bokningsslutid2, :massagetype2, :bokningsnamn2, :bokningsnummer2)");

$stmt_insertPerson->bindParam(':bokningsdatum2', $bokningsdatum, PDO::PARAM_STR);
$stmt_insertPerson->bindParam(':bokningsstartid2', $bokningstartid, PDO::PARAM_STR);
$stmt_insertPerson->bindParam(':bokningsslutid2', $bokningsslutid, PDO::PARAM_STR);
$stmt_insertPerson->bindParam(':massagetype2', $massagetype, PDO::PARAM_STR);
$stmt_insertPerson->bindParam(':bokningsnamn2', $bokningsnamn, PDO::PARAM_STR);
$stmt_insertPerson->bindParam(':bokningsnummer2', $bokningsnummer, PDO::PARAM_STR);
$stmt_insertPerson->execute();
}
}



?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Boka tid nu!</h1>

            <div>

            <form method="POST" action="">
                <label for="booking_date">Datum</label>
                <input type="date" id="booking_date" name="booking_date" required><br></br>

                <label for="booking_startime">Start tid</label>
                <input type="time" id="booking_startime" name="booking_startime" required>

                <label for="booking_endtime">Slut tid</label>
                <input type="time" id="booking_endtime" name="booking_endtime" required>
            </div>

             <h2>Vilken typ av massage önskas?</h2>

             <select name="booking_massage" id="massage_type">
             <option value="Klassiskmassage">Klassiskmassage</option>
             <option value="Sportmassage">Sportmassage</option>
             <option value="Fysioterapi">Fysioterapi</option>
             <option value="Happy ending">Happy ending</option>
             </select>

             
                
        

                <div class="text">
             
                    <label for="booking_name">Namn</label><br>
                    <input type="text" id="booking_name" name="booking_name" value=""><br><br>

                    <label for="booking_number">Telefonnummer</label><br>
                    <input type="tel" id="booking_number" name="booking_number" value=""><br><br>

                    <input type="submit" name="booking-submit" value="Skicka">
                </div>
            </form> 


        </div>
        <div class="col">
            <img src="img/spa-g1f937c4ae_1920.jpg" alt="">

        </div>

    </div>


    <div class="row ">
        <div class="text-center col p-3">
            <ul class="list-group ">

                <li class="list-group-item"><strong>Klassisk </strong>1h/60€</li>
                <li class="list-group-item"><strong>Sportmassage </strong>1h/70€</li>
                <li class="list-group-item"><strong>Fysioterapi </strong>1h/65€</li>
                <li class="list-group-item"><strong>Happy ending </strong>1h/100€</li>
            </ul>
        </div>
    </div>
</div>



</body>
</html>




<?php



	?>




<?php
include'footer.php';
?>



