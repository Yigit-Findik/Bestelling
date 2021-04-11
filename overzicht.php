<?php
    //sessie start altijd van te voren zodat informatie kan worden doorgegeven. O.a user input en gekozen eten/drinken
    session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="scripts/css/styles.css">
    </head>

    <body>

    <!-- header info overzicht's page -->
        <div class="containerHEADER">
            <h1 class="headerCLASS">Bestelling</h1>
        </div>

        <!-- informatie van klant -->
        <div class="containerFORM">
            <div class="containerFORMINNER">
                <?php
                    echo ("<label>Voornaam   : </label> " . $_SESSION["voornaam"] . "<br>");
                    echo ("<label>Achternaam : </label> " . $_SESSION["achternaam"] . "<br>");
                    echo ("<label>Email      : </label> " . $_SESSION["email"] . "<br>");
                    echo ("<label>Straatnaam: </label> " . $_SESSION["straatnaam"] . "<br>");
                    echo ("<label>Huisnummer: </label> " . $_SESSION["huisnummer"] . "<br>");
                    echo ("<label>Postcode: </label> " . $_SESSION["postcode"] . "<br>");
                    echo ("<label>Woonplaats: </label> " . $_SESSION["woonplaats"] . "<br>");
                    echo ("<label>Telefoon nummer: </label> " . $_SESSION["telefoonNummer"] . "<br>");
                    echo ("<label>Gerecht: </label> " . $_SESSION["gerecht"] . "<br>");
                    echo ("<label>Dranken: </label> " . $_SESSION["dranken"] . "<br>");
                ?>
                <button id="bestelID" value="bestellen" onclick="bababoey()" name="bestellen">Bestellen</button>
                <button id="anuleerID" value="anuleren" onclick="bababoey()" name="anuleren">Anuleren</button>
                <br>
                <button><a href="overzicht.php">Reset</a></button>
                <a href="index.php">index.php</a>
            </div>
        </div>

        <!-- footer info overzicht's page -->
        <div class="containerFOOTER">
            <h1 class="footerOVERZICHT">Overzicht</h1>
        </div>

        <!-- connectie met mijn javascript -->
        <script src="scripts/js/main.js"></script>
    </body>
</html>

<?php
    //klanten worden ge emailed en de eigenaar ook als bestellen word geklikt, als anuleren word geklikt dan gaat hij terug naar bestel pagina
    $messageKlant = "Hallo, \r\n
                    Bij deze is hier uw bestelling met alle bij behorende informatie: \r\n
                          voornaam   : " . $_SESSION["voornaam"] .
                    "\r\n achternaam : " . $_SESSION["achternaam"] .
                    "\r\n email      : " . $_SESSION["email"] .
                    "\r\n straatnaam : " . $_SESSION["straatnaam"] .
                    "\r\n huisnummer : " . $_SESSION["huisnummer"] .
                    "\r\n postcode   : " . $_SESSION["postcode"] .
                    "\r\n woonplaats : " . $_SESSION["woonplaats"] .
                    "\r\n telefoon   : " . $_SESSION["telefoonNummer"] .
                    "\r\n gerecht    : " . $_SESSION["gerecht"] .
                    "\r\n dranken    : " . $_SESSION["dranken"] .
                    "\r\n Met vriendelijke groet, " .
                    "\r\n Yigit's Bangers team";

    $messageBedrijf = "Hallo, \r\n
                    Nieuwe bestelling!: \r\n
                          voornaam   : " . $_SESSION["voornaam"] .
                    "\r\n achternaam : " . $_SESSION["achternaam"] .
                    "\r\n email      : " . $_SESSION["email"] .
                    "\r\n straatnaam : " . $_SESSION["straatnaam"] .
                    "\r\n huisnummer : " . $_SESSION["huisnummer"] .
                    "\r\n postcode   : " . $_SESSION["postcode"] .
                    "\r\n woonplaats : " . $_SESSION["woonplaats"] .
                    "\r\n telefoon   : " . $_SESSION["telefoonNummer"] .
                    "\r\n gerecht    : " . $_SESSION["gerecht"] .
                    "\r\n dranken    : " . $_SESSION["dranken"] .
                    "\r\n Met vriendelijke groet, " .
                    "\r\n Yigit's Bangers team";
    $to = $_SESSION["email"];
    if (isset($_GET["bestellen"])) {
        mail($to, "Bestelling Yigit's Bangers", $messageKlant);
        echo ("asdasd");
        mail("yigitfindik024@gmail.com", "bestelling", $messageBedrijf);
    }
    if (isset($_GET["anuleren"])) {
        header('location: index.php');
    }

    //debug
    var_dump($_SESSION);
    //var_dump(bestelling);

?>