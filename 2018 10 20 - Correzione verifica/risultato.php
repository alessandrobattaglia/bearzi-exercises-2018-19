<?php
/**
 * Created by PhpStorm.
 * User: Alessandro Battaglia
 * Date: 26/10/2018
 * Time: 11:10
 */

switch($_REQUEST['figura']) {
    case 'triangolo':
        $base = $_REQUEST['base'];
        $altezza = $_REQUEST['altezza'];

        $risultato = $base * $altezza / 2;
        break;
    case 'quadrato':
        $lato = $_REQUEST['lato'];

        $risultato = $lato * $lato;
        break;
    case 'rettangolo':
        $base = $_REQUEST['base'];
        $altezza = $_REQUEST['altezza'];

        $risultato = $base * $altezza;
        break;
    case 'cerchio':
        $raggio = $_REQUEST['raggio'];

        $risultato = $raggio * $raggio * M_PI;
        break;
    default:
        $risultato = "NAN";
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <title>Risultato.php</title>

    <link href="css/reboot.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>
<body>
    <h1>L’area della figura scelta è</h1>
    <p><?php echo $risultato; ?></p>
    <a href="menu.php">Torna al menù</a>
</body>
</html>
