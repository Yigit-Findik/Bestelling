<?php
    //sessie start altijd van te voren zodat informatie kan worden doorgegeven. O.a user input en gekozen eten/drinken
    session_start();
    //error warnings willen we niet, hiervoor word dit gebruikt om dit te ignoren
    error_reporting(E_ERROR | E_PARSE);
?>


<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="scripts/css/tailwind.css"> -->
        <link rel="stylesheet" href="scripts/css/styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header informatie -->
        <div class="containerHEADER">
            <h1 class="headerCLASS">Yigit's Bangers</h1>
        </div>
        <!-- container voor de form en bij behorende css -->
        <div class="containerFORM">
            <div class="containerFORMINNER">
                <form action="index.php" id="formID" method="get">

                    <!-- User input, waarde. Zorgt voor rode gloei als de input veld leeg is -->
                    <?php
                        echo ('<label>Voornaam: </label><br>');
                        if (isset($_GET['voornaam'])){
                            if($_GET['voornaam'] == ""){
                                echo('<input style="border-color: red" type="text" id="vnaam" name="voornaam" placeholder="Mark"> <br>');
                            }
                            else {
                                echo ('<input type="text" id="vnaam" name="voornaam" placeholder="Mark"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="text" id="vnaam" name="voornaam" placeholder="Mark"> <br>');
                        }
                        echo ('<label>Achternaam: </label><br>');
                        if (isset($_GET['achternaam'])){
                            if($_GET['achternaam'] == ""){
                                echo('<input style="border-color: red" type="text" id="anaam" name="achternaam" placeholder="Rutte"> <br>');
                            }
                            else {
                                echo ('<input type="text" id="anaam" name="achternaam" placeholder="Rutte"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="text" id="anaam" name="achternaam" placeholder="Rutte"> <br>');
                        }
                        echo ('<label>Email: </label><br>');
                        if (isset($_GET['email'])){
                            if($_GET['email'] == ""){
                                echo('<input style="border-color: red" type="email" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
                            }
                            else {
                                echo ('<input type="email" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="email" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
                        }
                        echo ('<label>Straat naam: </label><br>');
                        if (isset($_GET['straatnaam'])){
                            if($_GET['straatnaam'] == ""){
                                echo('<input style="border-color: red" type="text" id="snaam" name="straatnaam" placeholder="straatnaam"> <br>');
                            }
                            else {
                                echo ('<input type="text" id="snaam" name="straatnaam" placeholder="straatnaam"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="text" id="snaam" name="straatnaam" placeholder="straatnaam"> <br>');
                        }
                        echo ('<label>Huisnummer: </label><br>');
                        if (isset($_GET['huisnummer'])){
                            if($_GET['huisnummer'] == ""){
                                echo('<input style="border-color: red" type="number" id="hnummer" name="huisnummer" placeholder="50"> <br>');
                            }
                            else {
                                echo ('<input type="number" id="hnummer" name="huisnummer" placeholder="50"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="number" id="hnummer" name="huisnummer" placeholder="50"> <br>');
                        }
                        echo ('<label>Postcode: </label><br>');
                        if (isset($_GET['postcode'])){
                            if($_GET['postcode'] == ""){
                                echo('<input minlength = "6" maxlength="6" style="border-color: red" type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
                            }
                            else {
                                echo ('<input minlength = "6" maxlength="6" type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
                            }
                        }
                        else {
                            echo ('<input minlength = "6" maxlength="6" type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
                        }
                        echo ('<label>Woonplaats: </label><br>');
                        if (isset($_GET['woonplaats'])){
                            if($_GET['woonplaats'] == ""){
                                echo('<input style="border-color: red" type="text" id="wplaats" name="woonplaats" placeholder="Nijmegen"> <br>');
                            }
                            else {
                                echo ('<input type="text" id="wplaats" name="woonplaats" placeholder="Nijmegen"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="text" id="wplaats" name="woonplaats" placeholder="Nijmegen"> <br>');
                        }
                        echo ('<label>Telefoon nummer: </label><br>');
                        if (isset($_GET['telefoonNummer'])){
                            if($_GET['telefoonNummer'] == ""){
                                echo('<input style="border-color: red" type="text" id="tnummer" name="telefoonNummer" placeholder="06 12345678"> <br>');
                            }
                            else {
                                echo ('<input type="text" id="tnummer" name="telefoonNummer" placeholder="06 12345678"> <br>');
                            }
                        }
                        else {
                            echo ('<input type="text" id="tnummer" name="telefoonNummer" placeholder="06 12345678"> <br>');
                        }
                    ?>

                    <!-- Gerechten -->
                    <label>Gerechten: </label><br>
                    <select name="gerecht">
                        <option value="Gehaktbal">Gehaktbal</option>
                        <option value="Frikandel">Frikandel</option>
                        <option value="Kapsalon" >Kapsalon</option>
                        <option value="Salar Burger" >Salar burger</option>
                        <option value="Mexicano" >Mexicano</option>
                        <option value="Druif" >Druif</option>
                    </select><br>

                    <!-- Dranken -->
                    <label>Dranken: </label><br>
                    <select name="dranken" id="">
                        <option value="Water">Water</option>
                        <option value="Chocolade Melk">Chocolade melk</option>
                        <option value="Fristi">Fristi</option>
                        <option value="Cola">Cola</option>
                        <option value="Fanta">Fanta</option>
                        <option value="Melk">Melk</option>
                    </select><br>

                </form>
                <button form="formID" value="submit" onclick="bababoey()" name="submit">submit</button>

                <!-- <button onclick="bababoey()" name="submit">Submit</button> -->
                <!-- <input onclick="bababoey()" type="submit" name="submit"> -->

                <!-- Reset button voor debug -->
                <button><a href="index.php">Reset</a></button>
                <!-- Overzicht anchor voor debug -->
                <a href="overzicht.php">overzicht</a>
            </div>
        </div>

        <!-- Footer informatie en classes -->
        <div class="containerFOOTER">
            <h1 class="footerHEADER">Elegante kapsalon</h1>
        </div>

        <!-- connectie met mijn javascript, echter heb ik deze niet gebruikt vanwegen volledig php gebruik -->
        <script src="scripts/js/main.js"></script>
    </body>
</html>

<?php

    //bestellen functie zorgt voor redirect als input velden niet leeg zijn
    function bestellen() {
        echo ("debug test");

        $_SESSION = ["voornaam" => $_GET["voornaam"],"achternaam" => $_GET["achternaam"],"email" => $_GET["email"],"straatnaam" => $_GET["straatnaam"],"huisnummer" => $_GET["huisnummer"],"postcode" => $_GET["postcode"],"woonplaats" => $_GET["woonplaats"],"telefoonNummer" => $_GET["telefoonNummer"],"gerecht" => $_GET["gerecht"],"dranken" => $_GET["dranken"]];

        if(!empty($_GET["voornaam"]) && !empty($_GET["achternaam"]) && !empty($_GET["email"]) && !empty($_GET["straatnaam"]) && !empty($_GET["huisnummer"]) && !empty($_GET["postcode"]) && !empty($_GET["woonplaats"]) && !empty($_GET["telefoonNummer"]) ) {
            header('location: overzicht.php');
        }
    }

    //controlleV1, niet gebruikt maar zit wel uitgeschreven
    function controlleVoorraad($bestelling){
        $voorraad = ["Frikandel","Kapsalon", "Salar Burger", "Mexicano", "Druif", "Water", "Chocolade melk", "Fristi", "Cola", "Fanta", "Melk"];
        foreach ($bestelling as $key => $value){
            if ($key == 'bestelling'){
                if( in_array($value, $voorraad) ){
                    echo "de bestelling is opgenomen";
                }
                else{
                    echo "helaas is deze bestelling niet meer mogelijk";
                }
            }
        }
    }
    //controlle V2 zorgt voor de checkup of sessie input wel in de voorraad zit.
    function controlleVoorraadV2() {
        $voorraad = ["Frikandel","Kapsalon", "Salar Burger", "Mexicano", "Druif", "Water", "Chocolade melk", "Fristi", "Cola", "Fanta", "Melk"];
        if (!in_array($_SESSION["gerecht"], $voorraad) || !in_array($_SESSION["dranken"], $voorraad)) {
            echo "Deze drank of gerecht is niet meer verkrijgbaar, sorry voor het ongemak! Dit is wel verkrijgbaar: "
                . $voorraad[0] . ", " . $voorraad[1] . ", " . $voorraad[2] . ", " . $voorraad[3] . ", " . $voorraad[4]
                . ", " . $voorraad[5] . ", " . $voorraad[6] . ", " . $voorraad[7] . ", " . $voorraad[8] . ", " . $voorraad[9] . ", " . $voorraad[10];
        }
        else if (in_array($_SESSION["gerecht"], $voorraad) && in_array($_SESSION["gerecht"], $voorraad)) {
            bestellen();
        }

    }

    //als button word geklikt dan controllevoorraadv2 word actief
    if (isset($_GET["submit"])) {
        bestellen();
        //controlleVoorraadV2();
    }
?>