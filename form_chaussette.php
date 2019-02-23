<?php
include "assets/inc/header.php";
?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">

                <h2>Prise de mesure</h2>
                <p>A prendre de préférence le matin sur jambe reposée</p>
                <h4>Chausettes  de contention</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Coté :</label> <span class="etoile">*</span>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option selected>Les deux</option>
                            <option>Droite</option>
                            <option>Gauche</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tour de cheville</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>A</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="18 cm">
                        <p>A prendre environ 2 cm au dessus de la maléole</p>
                    </div>

                    <div class="form-group">
                        <label for="">Tour de mollet</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>B</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="40 cm">
                        <p>A prendre à son niveau le plus large</p>
                    </div>

                    <div class="form-group">
                        <label for="">Hauteur</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>D</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="40 cm">
                        <p>A prendre entre le sol et l'arrière du genou</p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pieds ouvert ou fermé</label> <span class="etoile">*</span>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Ouvert</option>
                            <option>Fermé</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Force de compression</label> <span class="etoile">*</span>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option selected>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Quantité</label> <span class="etoile">*  </span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Informations complémentaires</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
