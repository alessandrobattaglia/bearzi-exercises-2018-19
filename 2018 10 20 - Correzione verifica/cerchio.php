<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 26/10/2018
 * Time: 11:09
 */

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Cerchio.php</title>

    <link href="css/reboot.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>
<body>
    <h1>Inserisci i dati del cerchio</h1>
    <form action="risultato.php">
        <label class="width-full">Raggio: <input type="number" name="raggio" required /></label>
        <input type="hidden" name="figura" value="cerchio">
        <button type="submit" class="submit">Calcola</button>
    </form>
</body>
</html>
