<?php
/**
 * Created by PhpStorm.
 * User: 17359
 * Date: 23/02/2019
 * Time: 17:52
 */

include('../assets/inc/pdo.php');
include('../assets/inc/fonctions.php');
include('../assets/inc/request.php');

$nomTable = 'user';
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    delete($nomTable,$id);
    header("Location: dashboard.php");
}