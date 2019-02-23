<?php

function selectbyname($name){
    global $pdo;

    $sql = "SELECT * FROM user WHERE nom = :nom";
    $query = $pdo -> prepare($sql);
    $query->bindValue(':nom', $name, PDO::PARAM_STR);
    $query -> execute();
    $result = $query -> fetch();
    return $result;
}

function insertnewmdp($name,$mdp){
    global $pdo;

    $sql = "UPDATE user SET mdp = :mdp WHERE nom = :nom; UPDATE user SET mdp_modif = 'yes' WHERE nom = :nom;";
    $query = $pdo -> prepare($sql);
    $query->bindValue(':nom', $name, PDO::PARAM_STR);
    $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
    $query -> execute();
}