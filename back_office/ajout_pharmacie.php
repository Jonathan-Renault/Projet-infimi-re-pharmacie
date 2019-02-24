<?php
/**
 * Created by PhpStorm.
 * User: 17359
 * Date: 23/02/2019
 * Time: 18:04
 */
require "../assets/inc/pdo.php";
require "../assets/inc/request.php";

require "../assets/inc/function.php";

isAdmin($_SESSION['nom'],$_SESSION['status']);


$error = array();

if (!empty($_POST['submitted'])){

    $nom      = clean('nom');
    $adresse      = clean('adresse');
    $mail      = clean('email');

    if(!empty($nom)) {
        if(strlen($nom) < 3 ) {
            $error['nom'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif(strlen($nom) > 50) {
            $error['nom'] = 'Ce champs est trop long.(maximum 20 caractères)';
        } $inscrit = 1;
    } else {
        $error['nom'] = 'Veuillez renseigner ce champs';
    }
    if(!empty($adresse)) {
        if(strlen($adresse) < 3 ) {
            $error['adresse'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif(strlen($adresse) > 50) {
            $error['adresse'] = 'Ce champs est trop long.(maximum 20 caractères)';
        } $inscrit .= 2;
    }
    if(!empty($mail)) {
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Ceci n\'est pas une adresse mail.';
        } else {
            $testmail = testmail($mail);
            if (!empty($testmail)) {
                $error['email'] =  'Cet email est déjà pris';
            } $inscrit .= 3;
        }
    } else {
        $error['email'] = 'Veuillez renseigner ce champs';
    }


    if (count($error)==0) {

        insert_pharmacie($nom, $adresse, $mail);
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
                    <label for="adresse">Adresse</label>
                    <input type="text" name ="adresse" class="form-control"  placeholder="Adresse"value="<?php if(!empty($_POST['nom'])) { echo $_POST['adresse']; } ?>">
                    <span class="error"><?php spanError($error,'prenom');?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name ="email" class="form-control"  placeholder="Email"value="<?php if(!empty($_POST['nom'])) { echo $_POST['email']; } ?>">
                    <span class="error"><?php spanError($error,'email');?></span>
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
