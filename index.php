<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="scripts/css/styles.css">
    </head>
    <body>

        <form action="index.php" id="formID" method="get">

            <!-- User input, waarde -->
            <label>Voornaam: </label><br>
            <?php
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
            ?>
            <label>Achternaam: </label><br>
            <?php
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
            ?>
            <label>Email: </label><br>
            <?php
            if (isset($_GET['email'])){
                if($_GET['email'] == ""){
                    echo('<input style="border-color: red" type="text" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
                }
                else {
                    echo ('<input type="text" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
                }
            }
            else {
                echo ('<input type="text" id="mail" name="email" placeholder="voorbeeld@outlook.com"> <br>');
            }
            ?>
            <label>Straat naam: </label><br>
            <?php
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
            ?>
            <label>Huisnummer: </label><br>

            <?php
            if (isset($_GET['huisnummer'])){
                if($_GET['huisnummer'] == ""){
                    echo('<input style="border-color: red" type="text" id="hnummer" name="huisnummer" placeholder="50"> <br>');
                }
                else {
                    echo ('<input type="text" id="hnummer" name="huisnummer" placeholder="50"> <br>');
                }
            }
            else {
                echo ('<input type="text" id="hnummer" name="huisnummer" placeholder="50"> <br>');
            }
            ?>
            <label>Postcode: </label><br>
            <?php
            if (isset($_GET['postcode'])){
                if($_GET['postcode'] == ""){
                    echo('<input style="border-color: red" type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
                }
                else {
                    echo ('<input type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
                }
            }
            else {
                echo ('<input type="text" id="pcode" name="postcode" placeholder="bv. 1234AA"> <br>');
            }
            ?>
            <label>Woonplaats: </label><br>
            <?php
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
            ?>
            <label>Telefoon nummer: </label><br>
            <?php
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
            </select><br>

            <!-- Dranken -->
            <label>Dranken: </label><br>
            <select name="dranken" id="">
                <option value="Water">Water</option>
                <option value="Water">Water</option>
                <option value="Water">Water</option>
                <option value="Water">Water</option>
                <option value="Water">Water</option>
                <option value="Water">Water</option>
            </select><br>

        </form>

        <button form="formID" value="jeff" onclick="bababoey()" name="submit">submit</button>
        <!-- <button onclick="bababoey()" name="submit">Submit</button> -->
        <!-- <input onclick="bababoey()" type="submit" name="submit"> -->

        <!-- Reset button voor debug -->
        <button><a href="index.php">Reset</a></button>

        <script src="scripts/js/main.js"></script>
    </body>
</html>

<?php



    $voorraad = ["Gehaktbal", "Kip", "Water"];

    function bestellen() {
        $bestelling = ["voornaam" => $_GET["voornaam"],"achternaam" => $_GET["achternaam"],"email" => $_GET["email"],"straatnaam" => $_GET["straatnaam"],"huisnummer" => $_GET["huisnummer"],"postcode" => $_GET["postcode"],"woonplaats" => $_GET["woonplaats"],"telefoonNummer" => $_GET["telefoonNummer"],"bestelling" => $_GET["gerecht"],];


        //controlleEten($bestelling);

    }

    function controlleVoorraad($bestelling){
        $voorraad = ['Gehaktbal', 'Gehaktbal'];
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

    if (isset($_GET["submit"])) {
        bestellen();
    }

    //$name = $_POST["name"];
    //header("locatie");
    //die();
?>