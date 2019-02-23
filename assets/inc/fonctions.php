<?php
/**
 * Created by PhpStorm.
 * User: jonre
 * Date: 23/02/2019
 * Time: 11:48
 */
function debug($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
function clean($key){
    return trim(strip_tags($_POST[$key]));
}
function spanError($error, $key){
    if(!empty($error[$key])) {
        echo $error[$key]; }
}
