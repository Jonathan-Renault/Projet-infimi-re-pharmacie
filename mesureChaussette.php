<?php
require 'assets/inc/pdo.php';
require 'assets/inc/function.php';
require 'assets/inc/request.php';

include "assets/inc/header.php";

if (!empty($_POST)) {

    $erreur = array();

    $_POST['cote'] = trim(strip_tags($_POST['cote']));
    $_POST['cheville'] = trim(strip_tags($_POST['cheville']));
    $_POST['mollet'] = trim(strip_tags($_POST['mollet']));
    $_POST['hauteur'] = trim(strip_tags($_POST['hauteur']));
    $_POST['pied'] = trim(strip_tags($_POST['pied']));
    $_POST['force'] = trim(strip_tags($_POST['force']));
    $_POST['quantite'] = trim(strip_tags($_POST['quantite']));
    $_POST['commentaire'] = trim(strip_tags($_POST['commentaire']));

    if (!empty($_POST['cote']) and is_string($_POST['cote'])){
        if ($_POST['cote'] != 'Les deux' AND $_POST['cote'] != 'Droite' AND $_POST['cote'] != 'Gauche'){
            $erreur['cote'] = 'Fausse valeur';
        }
    }

    if (!empty($_POST['cheville']) and is_numeric($_POST['cheville'])){

        $erreur = borneTaille($_POST['cheville'],'cheville',5,100,$erreur);
    }
    else {
        $erreur['cheville'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['mollet']) and is_numeric($_POST['mollet'])){

        $erreur = borneTaille($_POST['mollet'],'mollet',5,100,$erreur);
    }
    else {
        $erreur['mollet'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['hauteur']) and is_numeric($_POST['hauteur'])){

        $erreur = borneTaille($_POST['hauteur'],'hauteur',5,100,$erreur);
    }
    else {
        $erreur['hauteur'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['pied']) and is_string($_POST['pied'])){
        if ($_POST['pied'] != 'Fermé' AND $_POST['pied'] != 'Ouvert'){
            $erreur = 'Fausse valeur';
        }
    }
    else {
        $erreur['pied'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['force']) and is_numeric($_POST['force'])){

        $erreur = borneTaille($_POST['force'],'force',1,4,$erreur);
    }
    else {
        $erreur['force'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['quantite']) and is_numeric($_POST['quantite'])){

        $erreur = borneTaille($_POST['quantite'],'quantite',1,10,$erreur);
    }
    else {
        $erreur['quantite'] = 'La valeur doit être un nombre entier';
    }

    if (isset($_POST['commentaire']) and is_string($_POST['commentaire'])){

        $erreur = borneTaille($_POST['commentaire'],'commentaire',0,1024,$erreur);
    }
    else {
        $erreur['commentaire'] = 'La valeur doit être un nombre entier';
    }

    if (!empty($erreur)) {

    }
    else {
        $i = 1;
        while (isset($_SESSION['chaussette'.$i])){
            echo $i;
            $i++;
        }

        $_SESSION['chaussette'.$i]['cote'] = $_POST['cote'];
        $_SESSION['chaussette'.$i]['cheville'] = $_POST['cheville'];
        $_SESSION['chaussette'.$i]['mollet'] = $_POST['mollet'];
        $_SESSION['chaussette'.$i]['hauteur'] = $_POST['hauteur'];
        $_SESSION['chaussette'.$i]['pied'] = $_POST['pied'];
        $_SESSION['chaussette'.$i]['force'] = $_POST['force'];
        $_SESSION['chaussette'.$i]['quantite'] = $_POST['quantite'];
        $_SESSION['chaussette'.$i]['commentaire'] = $_POST['commentaire'];
    }
}

?>

<form action="mesureChaussette.php" method="POST">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Coté :</label> <span class="etoile">*</span>
        <select class="form-control" id="exampleFormControlSelect1" name="cote">
            <option selected>Les deux</option>
            <option>Droite</option>
            <option>Gauche</option>
        </select>
        <?php if (!empty($erreur['cote'])) {echo $erreur['cote'];} ?>
    </div>

    <div class="form-group">
                <label for="">Tour de cheville</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>A</span>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="18 cm" name="cheville">
        <?php if (!empty($erreur['cheville'])) {echo $erreur['cheville'];} ?>
        <p>A prendre environ 2 cm au dessus de la maléole</p>
    </div>

    <div class="form-group">
        <label for="">Tour de mollet</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>B</span>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="40 cm" name="mollet">
        <?php if (!empty($erreur['mollet'])) {echo $erreur['mollet'];} ?>
        <p>A prendre à son niveau le plus large</p>
    </div>

    <div class="form-group">
        <label for="">Hauteur</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>D</span>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="40 cm" name="hauteur">
        <?php if (!empty($erreur['hauteur'])) {echo $erreur['hauteur'];} ?>
        <p>A prendre entre le sol et l'arrière du genou</p>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Pieds ouvert ou fermé</label> <span class="etoile">*</span>
        <select class="form-control" id="exampleFormControlSelect1" name="pied">
            <option>Ouvert</option>
            <option>Fermé</option>
        </select>
        <?php if (!empty($erreur['pied'])) {echo $erreur['pied'];} ?>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Force de compression</label> <span class="etoile">*</span>
        <select class="form-control" id="exampleFormControlSelect1" name="force">
            <option>1</option>
            <option selected>2</option>
            <option>3</option>
            <option>4</option>
        </select>
        <?php if (!empty($erreur['force'])) {echo $erreur['force'];} ?>
    </div>

    <div class="form-group">
        <label for="">Quantité</label> <span class="etoile">*  </span>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1" name="quantite">
        <?php if (!empty($erreur['quantite'])) {echo $erreur['quantite'];} ?>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Informations complémentaires</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="commentaire"></textarea>
        <?php if (!empty($erreur['commentaire'])) {echo $erreur['commentaire'];} ?>
    </div>

    <button class="btn btn-primary" type="submit">Valider</button>

</form>

<?php
include "assets/inc/footer.php";