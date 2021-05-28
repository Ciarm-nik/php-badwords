<!-- Descrizione: -->
<!-- Creare una variabile con un paragrafo di testo. -->
<!-- Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->


<?php

$testo = "Welcome PHP";


// echo '<pre>' , var_dump($_GET) , '</pre>';


// echo strlen($testo);

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

<p><?php echo $testo ?>
<br>
Lunghezza della stringa: <?php echo strlen($testo) ?>
<br>
Sostituisco il testo con i tre (*):
<?php echo str_replace("Welcome PHP", "***", $testo); ?>
</p>
    
</body>
</html>






