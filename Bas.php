<?php
require 'assets/inc/pdo.php';
require 'assets/inc/function.php';
require 'assets/inc/request.php';

if (!empty($_POST)) {

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $_POST['cuisse'] = trim(strip_tags($_POST['cuisse']));
    $_POST['cheville'] = trim(strip_tags($_POST['cheville']));
    $_POST['hauteurAD'] = trim(strip_tags($_POST['hauteurAD']));
    $_POST['pied'] = trim(strip_tags($_POST['pied']));
    $_POST['force'] = trim(strip_tags($_POST['force']));

    if (!empty($_POST['cuisse']) and is_numeric($_POST['cuisse'])){

        if (strlen($_POST['cuisse']) <= 5){
            $erreur = 'Taille trop petite.';
        }
        else if (strlen($_POST['cuisse']) > 100){
            $erreur = 'Taille trop grande';
        }
    }
    else {
        $erreur = 'Champ invalide ou vide.';
    }

    if (!empty($_POST['cheville']) and is_numeric($_POST['cheville'])){
        if (strlen($_POST['cheville']) <= 5){
            $erreur = 'Taille trop petite';
        }
        else if (strlen($_POST['cheville']) > 100){
            $erreur = 'Taille trop grande';
        }
    }
    else {
        $erreur = 'Champ invalide ou vide.';
    }

    if (!empty($_POST['hauteurAD']) and is_numeric($_POST['hauteurAD'])){
        if (strlen($_POST['hauteurAD']) <= 5){
            $erreur = 'Taille trop petite';
        }
        else if (strlen($_POST['hauteurAD']) > 100){
            $erreur = 'Taille trop grande';
        }
    }
    else {
        $erreur = 'Champ invalide ou vide.';
    }

    if (!empty($_POST['pied']) and is_string($_POST['pied'])){
        if ($_POST['pied'] != 'ferme' AND $_POST['pied'] != 'ouvert'){
            $erreur = 'Fausse valeur';
        }
    }
    else {
        $erreur = 'Champ invalide ou vide.';
    }

    if (!empty($_POST['force']) and is_numeric($_POST['force'])){
        if (strlen($_POST['force']) <= 5){
            $erreur = 'Taille trop petite';
        }
        else if (strlen($_POST['force']) > 100){
            $erreur = 'Taille trop grande';
        }
    }
    else {
        $erreur = 'Champ invalide ou vide.';
    }
}
?>
    <form action="" method="POST">
        <label>Tour de cuisse (en cm) : </label>
        <input type="number" name="cuisse"
               placeholder="Veuillez entrer une valeur">
        <br>
        <label>Tour de cheville (en cm) : </label>
        <input type="number" name="cheville"
               placeholder="Veuillez entrer une valeur">
        <br>
        <label>Hauteur AD (en cm) : </label>
        <input type="integer" name="hauteurAD"
               placeholder="Veuillez entrer une valeur">
        <br>


        <label>Pieds :</label>

        <input type="radio" name="pied" value="ferme"> fermés
        <input type="radio" name="pied" value="ouvert"> ouverts

        </select>
        <br>
        <label>Force de compression:</label>
        <input type="radio" name="force" value="1"> 1
        <input type="radio" name="force" value="2" checked> 2
        <input type="radio" name="force" value="3"> 3
        <input type="radio" name="force" value="4"> 4
        <br>
        <input type="submit" value="Ajouter au panier">
    </form>

<?php if (!empty($erreur['cuisse'])) {echo $erreur['cuisse'];} ?>
<?php if (!empty($erreur['cheville'])) {echo $erreur['cheville'];} ?>
<?php if (!empty($erreur['hauteurAD'])) {echo $erreur['hauteurAD'];} ?>
<?php if (!empty($erreur['pied'])) {echo $erreur['pied'];} ?>
<?php if (!empty($erreur['force'])) {echo $erreur['force'];} ?>