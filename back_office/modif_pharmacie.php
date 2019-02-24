<?php
require "../assets/inc/pdo.php";
require "../assets/inc/request.php";
require "../assets/inc/function.php";

isAdmin($_SESSION['nom'],$_SESSION['status']);

$error = array();
if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = cleanGet($_GET['id']);} else { $id= ''; }

if (!empty($_POST['submitted'])) {

    $nom = clean('nom');
    $adresse = clean('adresse');
    $mail = clean('email');

    if (!empty($nom)) {
        if (strlen($nom) < 3) {
            $error['nom'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif (strlen($nom) > 50) {
            $error['nom'] = 'Ce champs est trop long.(maximum 20 caractères)';
        }

    } else {
        $error['nom'] = 'Veuillez renseigner ce champs';
    }
    if (!empty($adresse)) {
        if (strlen($adresse) < 5) {
            $error['adresse'] = 'Ce champs est trop court.(minimum 3 caractères)';
        } elseif (strlen($adresse) > 50) {
            $error['adresse'] = 'Ce champs est trop long.(maximum 20 caractères)';
        }

    }
    if (!empty($mail)) {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = 'Ceci n\'est pas une adresse mail.';
        }
    }else{
        $error['email'] = 'Veuillez renseigner ce champs';
    }
    if (count($error)==0) {

        modif_pharmacie($nom,$adresse,$mail,$id);
        header("Location: dashboard.php");
    }

    } else{

    $pharmacie = phramacie_unique($id);
    if(!empty($pharmacie)) {
        $nom = $pharmacie['nom'];
        $adresse = $pharmacie['adresse'];
        $mail = $pharmacie['email'];
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
                <input type="text" name="nom" class="form-control"  placeholder="Nom" value="<?php  echo $nom;  ?>">
                <span class="error"><?php spanError($error,'nom');?></span>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name ="adresse" class="form-control"  placeholder="Adresse"value="<?php  echo $adresse;  ?>">
                <span class="error"><?php spanError($error,'adresse');?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name ="email" class="form-control"  placeholder="Email"value="<?php  echo $mail;  ?>">
                <span class="error"><?php spanError($error,'email');?></span>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" name="submitted" class="btn btn-primary" value="Modifier" >
        </div>
    </form>





<?php

require "assets/inc/footer.php";
