<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS POUR RESET-->
    <link rel="stylesheet" href="assets/css/reset.css"> 
    <!-- CSS DE LA PAGE -->
    <link rel="stylesheet" href="assets/css/style.css"> 
    <!-- CSS ICONES FONT- AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>
<body>

<nav>

    <div class="logo">
        <a href="index.html"><img src="assets/img/logo2.png" width="78px"></a>
    </div>
    <div class="nav-items">
        <a class="home" href="#">Accueil</a>
        <a href="#">A propos</a>
        <a href="#reservartions">Menu</a>
        <a href="#">Réservations</a>
        <a href="#">Commandes en ligne</a>
        <a href="#">Contact et Lieu</a>
    </div>
    <div class="login">
        <i class="fa fa-user-circle" style="font-size: 2rem;""></i>
    </div>
</nav>

<header>
<div class="header-info">
    <p>17 rue des Tilleuls, 08000 Villers-Seumeuse, France. Tél : 06 38 05 89 97</p>
</div>
<div class="marque">
    <h1>Simplon</h1>
    <h2>La cuisine à l'ardennaise</h2>
</div>

</header>

<section id="about-bg">
    <div class="about">
        <h1>Simplon</h1>
        <h2>La cuisine à l'ardennaise</h2>
        <p>Bah écoute moi ça va niquel !!!</p>
    </div>
</section>


  
<section id="reservations-bg">
<section id="reservations">

    <!-- id="retForm"onsubmit="submitFormReturn();return false;" -->
    <form action="" method="post" 
    >
        <select name="date" id="date" required>
            <option value="" style="color:gray;">Date</option>
            <option value="Aujourd'hui">Aujourd'hui</option>
            <option value="Demain">Demain</option>
            <option value="Après-demain">Après-demain</option>
            <option value="Dans 3 jours">Dans 3 jours</option>
            <option value="Dans 4 jours">Dans 4 jours</option>
            <option value="Dans 5 jours">Dans 5 jours</option>
        </select>
        <select name="heure" id="heure"  required>
            <option value="" style="color:gray;">Heure</option>
            <option value="12h">12h</option>
            <option value="13h">13h</option>
            <option value="14h">14h</option>
            <option value="15h">15h</option>
            <option value="16h">16h</option>
            <option value="17h">17h</option>
            <option value="12h">18h</option>
            <option value="13h">19h</option>
            <option value="14h">20h</option>
            <option value="15h">21h</option>
            <option value="16h">22h</option>
            <option value="17h">23h</option>
        </select>
        <select name="clients" id="clients" required>
            <option value="" style="color:gray;" >Nombre de personnes</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
            <input type="submit" name="submit" value="Réserver">
    </form>

    <?php
    // condition si input
    if(isset($_POST['submit'])){
    // variables
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $clients = $_POST['clients'];
        // Début
        

        // echo 'Vous avez réservé pour', "$clients", 'personnes, le', "$date", 'à',"$heure";
    }
    ?>

    <!-- <p id="retOp"><?php 
    if(isset($_POST['submit'])){
     echo 'Vous avez réservé pour &nbsp', "$clients", '&nbsp personnes, le &nbsp', "$date", '&nbsp à &nbsp',"$heure";
    }
    ?></p>
   <script>
      var retForm = document.getElementById("retForm");
      var retOp = document.getElementById("retOp");
      function submitFormReturn(event) {
         retOp.innerHTML = "<b>Réservation effectué</b>";
      }
   </script> -->
    

<div class="reserved">

    <?php 
    if(isset($_POST['submit'])){
     echo 'Vous avez réservé pour &nbsp', "$clients", '&nbsp personnes, le &nbsp', "$date", '&nbsp à &nbsp',"$heure";
    }
    ?>

</div>

</section>
</section>


<section>
    
    <h1>Simplon</h1>
    <h2>La cuisine à l'ardennaise</h2>
    <p>Bah écoute moi ça va niquel !!!</p>


    <h1>Simplon</h1>
    <h2>La cuisine à l'ardennaise</h2>
    <p>Bah écoute moi ça va niquel !!!</p>

</section>


</body>
</html>