<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 26/10/2018
 * Time: 10:45
 */

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Triangolo.php</title>

    <link href="css/reboot.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>
<body>
    <h1>Inserisci i dati del triangolo</h1>
    <form action="risultato.php">
        <label class="width-full">Base: <input type="number" name="base" required /></label>
        <label class="width-full">Altezza: <input type="number" name="altezza" required /></label>
        <input type="hidden" name="figura" value="triangolo">
        <button type="submit" class="submit">Calcola</button>
    </form>
</body>
</html>
