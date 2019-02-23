<?php

function ifsessionExists($nom){

    if(!empty($_SESSION[$nom])){
        return true;
    }
    else{
        return false;
    }
}