<?php
function ShopOpen(){
    $today = strtotime($_SERVER['REQUEST_TIME']); // Date du serveur
    $today = date("l", $today);
    $today = strtolower($today); // monday

    $hours = $_SERVER['REQUEST_TIME']; // Heure du serveur
    $hours = date("h", $hours); //  number
    $hours = 9;


    if($today === "tuesday" || $today === "wednesday" || $today === "thursday" || $today === "friday") // Jours ouvert
        if ($hours >= 10 && $hours < 12 || $hours >= 15 && $hours < 19 )   // Ouvert à 10-12h et 15-19h
            return true;
    return false;
}
?>
