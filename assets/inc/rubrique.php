    <form action="" method="POST">

        <div class="form-group">
            <label for="exampleFormControlSelect1">Rubrique :</label>
            <select class="form-control" name="Rubrique" onChange='Choix(this.form)'>
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
            <select class="form-control" name="Page">
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

