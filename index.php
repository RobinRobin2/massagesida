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


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Hem</a>
        <a class="nav-link" href="">Boka tid nu!</a>
        <a class="nav-link" href="#">Prislista</a>
      </div>
    </div>
  </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Boka tid nu!</h1>

            <div>
                <label for="bookingdate">Datum</label>
                <input type="date" id="bookingdate" name="bookingd" required><br></br>

                <label for="bookingtime">Tid</label>
                <input type="time" id="bookingtime" name="bookingt" required>
            </div>

             <h2>Vilken typ av massage önskas?</h2>

            <form action="">
                <input type="radio" id="classic" name="classic" value="">
                <label for="classic">Klassisk</label>

                <input type="radio" id="sport" name="sport" value="">
                <label for="sport">Sportmassage</label><br>

                <input type="radio" id="fysio" name="fysio" value="">
                <label for="fysio">Fysioterapi</label>

                <input type="radio" id="happy" name="happy" value="">
                <label for="happy">Happy ending</label><br>


            

                <div class="text">
             
                    <label for="fname">Namn</label><br>
                    <input type="text" id="fname" name="fname" value=""><br><br>

                    <label for="phone">Telefonnummer</label><br>
                    <input type="tel" id="phone" name="phone" value=""><br><br>
                    <input type="submit" value="Skicka">
                </div>
            </form> 

        </div>
        <div class="col">
            <img src="img/spa-g1f937c4ae_1920.jpg" alt="">

        </div>

    </div>

    <div class="row ">
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



?>