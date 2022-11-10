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
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Boka tid nu!</h1>
            <form method="POST" action="">
            <div>
                <label for="booking_date">Datum</label>
                <input type="date" id="booking_date" name="booking_date" required><br></br>

                <label for="booking_startime">Start tid</label>
                <input type="time" id="booking_startime" name="booking_startime" required>

                <label for="booking_endtime">Slut tid</label>
                <input type="time" id="booking_endtime" name="booking_endtime" required>
            </div>

             <h2>Vilken typ av massage önskas?</h2>

           
                <input type="radio" id="classic" name="massage" value="">
                <label for="classic">Klassisk</label>

                <input type="radio" id="sport" name="massage" value="">
                <label for="sport">Sportmassage</label><br>

                <input type="radio" id="fysio" name="massage" value="">
                <label for="fysio">Fysioterapi</label>

                <input type="radio" id="happy" name="massage" value="">
                <label for="happy">Happy ending</label><br>

        

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

    <div id="test1" class="row ">
        <div class="text-center col p-3">
            <ul class="list-group">
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

include 'massagesida/includes/config.php';

if(isset($_POST['booking-submit'])){
	
$bokningsdatum = $_POST['booking_date'];
$bokningstartid = $_POST['booking_startime'];
$bokningsslutid = $_POST['booking_endtime'];
$bokningsnamn = $_POST['booking_name'];
$bokningsnummer = $_POST['booking_number'];

echo $bokningsdatum . "<br>";
echo $bokningstartid . "<br>";
echo $bokningsslutid . "<br>";
echo $bokningsnamn . "<br>";
echo $bokningsnummer . "<br>";


if($conn->query("INSERT INTO bookings (booking_date, booking_startime, booking_endtime, booking_name, booking_number) values ('$bokningsdatum', '$bokningstartid',  '$bokningsslutid', '$bokningsnamn', '$bokningsnummer')")){
	echo "Article created successfully";
	echo "<a href='index.php'>Return</a>";

}
else{
	echo "error";
	echo "<a href='index.php'>Return</a>";


}

}

	
?>




<?php
include'footer.php';
?>
