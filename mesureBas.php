<?php
require 'assets/inc/pdo.php';
require 'assets/inc/function.php';
require 'assets/inc/request.php';

include "assets/inc/header.php";

if (!empty($_POST)) {

    $erreur = array();

    $_POST['cote'] = trim(strip_tags($_POST['cote']));
    $_POST['cheville'] = trim(strip_tags($_POST['cheville']));
    $_POST['cuisse'] = trim(strip_tags($_POST['cuisse']));
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
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['cuisse']) and is_numeric($_POST['cuisse'])){

        $erreur = borneTaille($_POST['cuisse'],'cuisse',5,100,$erreur);
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['hauteur']) and is_numeric($_POST['hauteur'])){

        $erreur = borneTaille($_POST['hauteur'],'hauteur',5,100,$erreur);
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['pied']) and is_string($_POST['pied'])){
        if ($_POST['pied'] != 'Fermé' AND $_POST['pied'] != 'Ouvert'){
            $erreur = 'Fausse valeur';
        }
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['force']) and is_numeric($_POST['force'])){

        $erreur = borneTaille($_POST['force'],'force',1,4,$erreur);
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($_POST['quantite']) and is_numeric($_POST['quantite'])){

        $erreur = borneTaille($_POST['quantite'],'quantite',1,10,$erreur);
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (isset($_POST['commentaire']) and is_string($_POST['commentaire'])){

        $erreur = borneTaille($_POST['commentaire'],'commentaire',0,1024,$erreur);
    }
    else {
        $erreur = 'La valeur doit être un nombre entier';
    }

    if (!empty($erreur)) {}
    else {
        echo 'else';
        $i = 1;
        while (isset($_SESSION['bas'.$i])){
            echo $i;
            $i++;
        }

        $_SESSION['bas'.$i]['cote'] = $_POST['cote'];
        $_SESSION['bas'.$i]['cheville'] = $_POST['cheville'];
        $_SESSION['bas'.$i]['cuisse'] = $_POST['cuisse'];
        $_SESSION['bas'.$i]['hauteur'] = $_POST['hauteur'];
        $_SESSION['bas'.$i]['pied'] = $_POST['pied'];
        $_SESSION['bas'.$i]['force'] = $_POST['force'];
        $_SESSION['bas'.$i]['quantite'] = $_POST['quantite'];
        $_SESSION['bas'.$i]['commentaire'] = $_POST['commentaire'];
    }
}

?>
                <form action="mesureBas.php" method="POST">

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
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="25 cm" name="cheville">
                        <?php if (!empty($erreur['cheville'])) {echo $erreur['cheville'];} ?>
                        <p>A prendre environ 2 cm au dessus de la maléole</p>
                    </div>

                    <div class="form-group">
                        <label for="">Tour de cuisse</label>  <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>C</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="60 cm" name="cuisse">
                        <?php if (!empty($erreur['cuisse'])) {echo $erreur['cuisse'];} ?>
                        <p>A prendre sous le pli fessier</p>

                    </div>

                    <div class="form-group">
                        <label for="">Hauteur</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>E</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="70 cm" name="hauteur">
                        <?php if (!empty($erreur['hauteur'])) {echo $erreur['hauteur'];} ?>
                        <p>A prendre entre le sol et en dessous du pli fessier</p>
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





            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>



<?php
include "assets/inc/footer.php";