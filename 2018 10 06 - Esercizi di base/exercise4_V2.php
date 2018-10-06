<?php
/**
 * Created by PhpStorm.
 * User: Vittore Zen
 * Date: 06/10/2018
 * Time: 12:23
 */

$n=rand(0,100000000000);

echo "$n: ".converti($n)."\r\n";

function converti($n){
    $abbr=null;
    if($n == 0){
        return "ZERO";
    }
    $lettu = ["","Uno","Due","Tre","Quattro","Cinque","Sei","Sette","Otto","Nove"];
    $lettu1 = ["Dieci","Undici","Dodici","Tredici","Quattordici","Quindici","Sedici","Diciassette","Diciotto","Diciannove"];
    $lettd = ["","Dieci","Venti","Trenta","Quaranta","Cinquanta","Sessanta","Settanta","Ottanta","Novanta"];
    $prefs = ["","UnMila","UnMilione","UnMiliardo"];
    $prefp = ["","Mila","Milioni","Miliardi"];
    $numero = (string)$n;
    $lmax = strlen($numero);
    //indica se centinaia=2, decine=1 o unita=0
    $cdu = (int)(($lmax-1) % 3);
    //indica il moltiplicatore
    $molt = (int)(($lmax-1) / 3);
    if($molt > 3){
        $molt = (int)($molt % 4);
    }

    $risultato = "";    //contiene il numero in lettere
    $i  = 0;   //contatore all'interno del numero

    while($i < $lmax){
        $ris_par = "";
        $cent_dec = 0;  //se=1, indica se nelle centinaia o nelle decine c'era una cifra <> da 0
        $decine = 0;    //se=1, indica che nelle decine c'era un 1
        if($i < $lmax-3 && $molt < 1){
            $molt = 3;
        }
        $car =(int)substr($numero,$i,1);
        //* centinaia
        if( $cdu == 2 ){
            if ($car > 0){
                if( $car != 1){
                    $ris_par = $lettu[$car] . "Cento";
                }else{
                    $ris_par =  "Cento";
                }
                $cent_dec = 1;
            }
            $i++;
        }
        // decine
        $car =(int)substr($numero,$i,1);
        if( $cdu >= 1) {
            if( $car == 1){
                $decine = 1;
            } else if($car > 1){
                $ris_par = $ris_par . $lettd[$car];
                $cent_dec = 2;
            }
            $i++;
        }
        // unita
        $car =(int)substr($numero,$i,1);
        if( $cdu >= 0) {
            if( $decine == 1){
                //scrive numero da 10 a 19
                $ris_par = $ris_par .$lettu1[$car];
                $cent_dec = 1;
            }else {
                // scrive gli altri numeri 0 a 9
                if (($car == 1 || $car == 8) && $cent_dec == 2){
                    $ris_par = substr($ris_par,0, strlen($ris_par)-1);
                }
                if (($car == 1 && $cent_dec > 0) || $car > 1 || $molt == 0 ){
                    $ris_par = $ris_par . $lettu[$car];
                }
            }
            if ($decine == 1 || $cent_dec > 0 || $car != 0 || $molt == 3){
                if ($cent_dec == 0 && $car == 1){
                    $ris_par = $ris_par . $prefs[$molt];
                }else{
                    $ris_par = $ris_par . $prefp[$molt];
                }
            }
            if (($ris_par == "UnMila" || $ris_par == "Mila") && $i == 0 ){
                $ris_par = "Mille";
            }
            $i++;
            $molt--;
            $cdu = 2;
            $risultato = $risultato . $ris_par;
            if ($abbr == true && $i >= $lmax-3){
                $risultato = $risultato + "/" + substring($numero,strlen($numero)-2);
                break;
            }
        }
    }
    return $risultato;

}