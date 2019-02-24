<?php
include "assets/inc/header.php";
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8" style="margin-bottom: 30vh;">

                <h2>Validation</h2>

                <h4>Chausette de contention</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Coté</th>
                        <th scope="col">Cheville</th>
                        <th scope="col">Mollet</th>
                        <th scope="col">Hauteur</th>
                        <th scope="col">Pied</th>
                        <th scope="col">Force</th>
                        <th scope="col">Quantite</th>
                        <th scope="col">Commentaire</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Droit</td>
                        <td>42</td>
                        <td>42</td>
                        <td>42</td>
                        <td>Fermé</td>
                        <td>2</td>
                        <td>4</td>
                        <td>No comments</td>
                    </tr>
                    </tbody>
                </table>

                <form>
                    <div class="form-group">
                        <label for="">Numéro de séjour :</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="form-group">
                        <label for="">Ordonnance :</label>
                        <input type="file" class="" id="exampleFormControlInput1">
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
