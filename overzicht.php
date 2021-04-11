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

        <!-- debug -->
        <div class="containerFORM">
            <div class="containerFORMINNER">

                test
                <br>
                <button><a href="overzicht.php">Reset</a></button>
                <a href="index.php">index.php</a>
            </div>
        </div>

        <!-- footer info overzicht's page -->
        <div class="containerFOOTER">
            <h1 class="footerOVERZICHT">Overzicht</h1>
        </div>

        <!-- connectie met mijn javascript, echter heb ik deze niet gebruikt vanwegen volledig php gebruik -->
        <script src="scripts/js/main.js"></script>
    </body>
</html>

<?php
    //debug
    var_dump($_SESSION);
    //var_dump(bestelling);

?>