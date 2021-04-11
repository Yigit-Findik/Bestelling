<?php
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
        <div class="containerHEADER">
            <h1 class="headerCLASS">Bestelling</h1>
        </div>

        <!-- debug -->
        <div class="containerFORM">
            <div class="containerFORMINNER">
                test
                <br>
                <a href="index.php">index.php</a>
            </div>
        </div>

        <div class="containerFOOTER">
            <h1 class="footerOVERZICHT">Overzicht</h1>
        </div>
        <script src="scripts/js/main.js"></script>
    </body>
</html>

<?php

    var_dump($_SESSION);
    //var_dump(bestelling);

?>