<?php
$testo_inserito = $_GET["testo"];
$parola_censurata = 'ciao';
$risultato = str_replace($parola_censurata, '***', $testo_inserito);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p>
       La parola digitata nell'input è <?php echo $testo_inserito ?> ed è lunga <?php echo strlen($testo_inserito) ?> caratteri
    </p>
    <p>
       La parola digitata nell'input è <?php echo $risultato ?> ed è lunga <?php echo strlen($risultato) ?> caratteri
    </p>
</body>
</html>