<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yvetot</title>

    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">




    <!--<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/260783/app.js"></script>-->

</head>

<body>

<nav class="nav justify-content-center">
    <h1 class="text-center">E-Orthesis</h1>
</nav>

    <div class="container">
        <form action="" method="POST">

            <div class="form-group">
                <label for="exampleFormControlSelect1">Rubrique :</label>
                <select name="Rubrique" onChange='Choix(this.form)'>
                    <OPTION>-- Choisissez une rubrique ---</OPTION>
                    <OPTION>Contention</OPTION>
                    <OPTION>Cheville & Pied</OPTION>
                    <OPTION>Genou</OPTION>
                    <OPTION>Poignet & main</OPTION>
                    <OPTION>Epaule & Bras</OPTION>
                    <OPTION>Tronc & rachis</OPTION>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Dispositif :</label>
                <select name="Page">
                    <OPTION>-- Choisissez une page ---</OPTION>
                    <OPTION></OPTION>
                    <OPTION></OPTION>
                    <OPTION></OPTION>
                </select>
            </div>

            <input type="submit" value="Valider">

        </form>
        <script type="text/javascript" >
            function Choix(form) {
                i = form.Rubrique.selectedIndex;
                if (i == 0) {
                    return;
                }
                switch (i) {
                    case 1 : var txt = new Array ('Chausette','Bas','Manchon'); break;
                    case 2 : var txt = new Array ('?','?','?'); break;
                    case 3 : var txt = new Array ('?','?','?'); break;
                }
                form.Rubrique.selectedIndex = 0;
                for (i=0;i<3;i++) {
                    form.Page.options[i+1].text=txt[i];
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>