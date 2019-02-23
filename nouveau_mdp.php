<?php
require 'assets/inc/pdo.php';
require 'assets/inc/function.php';
require 'assets/inc/request.php';

print_r($_SESSION);

if (!empty($_POST['mdp1']) and !empty($_POST['mdp2'])){

    $mdp1 = trim(strip_tags($_POST['mdp1']));
    $mdp2 = trim(strip_tags($_POST['mdp2']));

    if ($mdp1 == $mdp2){
        if (strlen($mdp1) < 5) {
            $erreur = 'mot de passe trop court';
        }
        else if (strlen($mdp1) >= 255) {
            $erreur = 'mot de passe trop long';
        }
        else {
            $mdp1 = password_hash($mdp1, PASSWORD_DEFAULT);
            insertnewmdp($_SESSION['nom'],$mdp1);
            header("Location: accueil.php");
        }
    }
    else {
        $erreur = 'Les mots de passe ne correspondent pas';
    }
}
    ?>

<form action="nouveau_mdp.php" method="post">
    <div>
        <label for="mdp">Nouveau mot de passe :</label><br/>
        <input type="password" id="mdp" name="mdp1" required>
    </div>
    <div>
        <label for="newmdp">Confirmer mot de passe :</label><br/>
        <input type="password" id="newmdp" name="mdp2" required>
    </div>
    <?php if (!empty($erreur)) {echo $erreur;} ?>
    <input type="submit" value="Valider">
</form>