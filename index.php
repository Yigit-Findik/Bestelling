<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>

        <form action="index.php" method="get">

            <label>Voornaam: </label><br>
            <input text="text" id="name" placeholder="voornaam"> <br>

            <select name="gerecht" id="">
                <option value="Gehaktbal">Gehaktbal</option>
                <option value="Frikandel">Frikandel</option>
                <option value="Water">Water</option>
            </select> <br>

            <input type="submit" name="submit">

        </form>

        <script src="js/main.js"></script>

    </body>

</html>

<?php

    $voorraad = ["Gehaktbal", "Kip", "Water"];

    function bestellen() {
        $bestelling = ["voornaam" => $_POST["voornaam"], "bestelling" => $_POST["gerecht"]];


        controlleEten($bestelling);

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

    if (isset($_POST["submit"])) {
        bestellen();
    }

    //$name = $_POST["name"];
    //header("locatie");
    //die();

?>

