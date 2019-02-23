<?php
require 'assets/inc/pdo.php';
require 'assets/inc/function.php';
require 'assets/inc/request.php';

if (!empty($_POST['user_name']) and !empty($_POST['user_mdp'])){

    $name = strtolower(trim(strip_tags($_POST['user_name'])));
    $mdp = trim(strip_tags($_POST['user_mdp']));

    $result = selectbyname($name);

    if (!empty($result)) {
        if (password_verify($mdp,$result['mdp'])) {

                $_SESSION['nom'] = $result['nom'];
                $_SESSION['prenom'] = $result['prenom'];
                $_SESSION['status'] = $result['status'];
                $_SESSION['mdp_modif'] = $result['mdp_modif'];

            if ($result['mdp_modif'] == 'no'){
                header("Location: nouveau_mdp.php");
            }
            else {
                header("Location: accueil.php");
            }
        }
        else {
            echo 'Le mot de passe est invalide.';
        }
    }
    else {
        echo 'Le nom saisi est invalide.';
    }
}

?>

<form action="index.php" method="post">
    <div>
        <label for="name">Nom :</label><br/>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="mdp">Mot de passe :</label><br/>
        <input type="password" id="mdp" name="user_mdp" required>
    </div>
    <input type="submit" value="Connexion">
</form>