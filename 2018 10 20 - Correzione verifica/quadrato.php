<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 26/10/2018
 * Time: 10:54
 */

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Quadrato.php</title>

    <link href="css/reboot.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>
<body>
<h1>Inserisci i dati del quadrato</h1>
<form action="risultato.php">
    <label class="width-full">Lato: <input type="number" name="lato" required /></label>
    <input type="hidden" name="figura" value="quadrato">
    <button type="submit" class="submit">Calcola</button>
</form>
</body>
</html>

