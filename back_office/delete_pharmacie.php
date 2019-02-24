<?php
include('../assets/inc/pdo.php');
include('../assets/inc/function.php');
include('../assets/inc/request.php');

isAdmin($_SESSION['nom'],$_SESSION['status']);

$nomTable = 'pharmacie';
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    delete($nomTable,$id);
    header("Location: dashboard.php");
}

