<?php

function debug($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
function clean($key){
    return trim(strip_tags($_POST[$key]));
}
function cleanGet($key){
    return trim(strip_tags($_GET[$key]));
}
function spanError($error, $key){
    if(!empty($error[$key])) {
        echo $error[$key]; }
}

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
        header("Location: ../index.php");
    }
}