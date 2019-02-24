<?php
include "assets/inc/header.php";
include "assets/inc/rubrique.php";

?>


                <h2>Prise de mesure</h2>
                <p>A prendre de préférence le matin sur jambe reposée</p>
                <h4>Bas de contention</h4>

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
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="25 cm">
                        <p>A prendre environ 2 cm au dessus de la maléole</p>
                    </div>

                    <div class="form-group">
                        <label for="">Tour de cuisse</label>  <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>C</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="60 cm">
                        <p>A prendre sous le pli fessier</p>
                    </div>

                    <div class="form-group">
                        <label for="">Hauteur</label> <span class="etoile">*  </span><i class="fas fa-info-circle">
                            <img src="assets/img/mesure-bas.jpg" alt="mesure bas"> </i> <span>E</span>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="70 cm">
                        <p>A prendre entre le sol et en dessous du pli fessier</p>
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
                        <label for="exampleFormControlTextarea1">Informations complémentaires</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Valider</button>

                </form>







<?php
include "assets/inc/footer.php";
