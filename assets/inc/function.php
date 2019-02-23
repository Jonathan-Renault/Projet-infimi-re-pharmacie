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