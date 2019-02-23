<?php
/**
 * Created by PhpStorm.
 * User: 17359
 * Date: 23/02/2019
 * Time: 15:03
 */
require "../assets/inc/pdo.php";
require "../assets/inc/request.php";
require "../assets/inc/fonctions.php";

$error = array();

if (!empty($_POST['submitted'])){

    $prenom   = clean('prenom');
    $nom      = clean('nom');

    if(!empty($nom)) {
        if(strlen($nom) < 3 ) {
            $error['nom'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif(strlen($nom) > 20) {
            $error['nom'] = 'Ce champs est trop long.(maximum 20 caractères)';
        } $inscrit = 1;
    } else {
        $error['nom'] = 'Veuillez renseigner ce champs';
    }
    if(!empty($prenom)) {
        if(strlen($prenom) < 3 ) {
            $error['prenom'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif(strlen($prenom) > 20) {
            $error['prenom'] = 'Ce champs est trop long.(maximum 20 caractères)';
        } $inscrit .= 2;
    }


    if (count($error)==0) {

        insert_inscription($prenom ,$nom);
        header("Location: dashboard.php");
    }

}


require "assets/inc/header.php";
require "assets/inc/sidebar.php";
?>



    <div class="content-wrapper">
        <form action="" method="POST" role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control"  placeholder="Nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
                    <span class="error"><?php spanError($error,'nom');?></span>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name ="prenom" class="form-control"  placeholder="Prenom"value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
                    <span class="error"><?php spanError($error,'prenom');?></span>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" name="submitted" class="btn btn-primary" value="Ajouter" >
            </div>
        </form>


    </div>







<?php

require "assets/inc/footer.php";
