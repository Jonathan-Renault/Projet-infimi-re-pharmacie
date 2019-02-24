<?php

function ifsessionExists($nom){

    if(!empty($_SESSION[$nom])){
        return true;
    }
    else{
        return false;
    }
}

function borneTaille($value,$index,$min,$max,$erreur){

    if ($value < $min){
        $erreur[$index] = 'La valeur doit être plus grand que '.$min.'.';
    }
    else if ($value > $max){
        $erreur[$index] = 'La valeur doit être plus petite que '.$max.'.';
    }
    return $erreur;
}

function isLog($value){

    if (!empty($value['nom'])){
        $retour = true;
    }
    else {
        $retour = false;
    }
    if ($retour == false){
        header("Location: index.php");
    }
}

function isAdmin($value,$value2){

    if (!empty($value) and $value2 == 'admin'){
        $retour = true;
    }
    else {
        $retour = false;
    }
    if ($retour == false){
        die;
    }
}