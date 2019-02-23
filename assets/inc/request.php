<?php
/**
 * Created by PhpStorm.
 * User: jonre
 * Date: 23/02/2019
 * Time: 11:48
 */
function insert_inscription( $prenom, $nom){
    global $pdo;

    $mdp   = "e-orthesis";

    $sql = "INSERT INTO `user`( `prenom`,`nom`,`mdp`) VALUES (:prenom , :nom , :mdp)";
    $query= $pdo -> prepare($sql) ;
    $query-> bindvalue(':nom' , $nom , PDO::PARAM_STR );
    $query-> bindvalue(':prenom' , $prenom , PDO::PARAM_STR );
    $query-> bindvalue(':mdp' , $mdp , PDO::PARAM_STR );

    return $query-> execute();
}
function insert_pharmacie($nom , $adresse, $mail){
    global $pdo;

    $sql = "INSERT INTO `pharmacie`( `nom`,`adresse`,`email`) VALUES (:nom , :adresse , :mail)";
    $query= $pdo -> prepare($sql) ;
    $query-> bindvalue(':nom' , $nom , PDO::PARAM_STR );
    $query-> bindvalue(':adresse' , $adresse , PDO::PARAM_STR );
    $query-> bindvalue(':mail' , $mail , PDO::PARAM_STR );

    return $query-> execute();
}
function requeteListe($nomTable){
    global $pdo;
    $sql = "SELECT * FROM $nomTable";
    $query= $pdo -> prepare($sql) ;
    $query-> execute();
    return $query -> fetchall();
}
function delete($nomTable,$id){
    global $pdo;
    $sql="DELETE FROM $nomTable WHERE id=:id";
    $query = $pdo ->prepare($sql);
    $query -> bindValue(':id',$id,PDO::PARAM_INT);
    $query -> execute();
}
function testmail($mail) {
    global $pdo;
    $sql="SELECT * FROM pharmacie WHERE mail =:mail "; //requete à modifier
    $query= $pdo -> prepare($sql) ;//preparer la requete
    $query-> bindvalue(':mail' , $mail , PDO::PARAM_STR );
    $query-> execute(); //execute la requete
    return $query -> fetch(); // $a variable retourner / fetchall() pour les requetes avec multiple array sinon fetch()
}
