<!-- Descrizione: -->
<!-- Creare una variabile con un paragrafo di testo. -->
<!-- Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->


<?php

$testo = "Welcome PHP";

$badword = array_key_exists("badword", $_GET) ? $_GET["badword"] : '';

$testoModificato = str_replace($badword, "***", $testo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?php
        echo $testo;
        echo "<br>";
        echo strlen($testo)
        ?>
    </p>

    <p>
        <?php
        echo $testoModificato;
        echo "<br>";
        echo strlen($testoModificato);
        ?>
    </p>

</body>

</html>