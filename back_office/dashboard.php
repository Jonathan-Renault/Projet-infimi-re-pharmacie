<?php

require "../assets/inc/pdo.php";
require "../assets/inc/request.php";
require "../assets/inc/function.php";

isAdmin($_SESSION['nom'],$_SESSION['status']);

$nomTable = 'user';
$tableauUsers = requeteListe($nomTable);
$nomTable = 'pharmacie';
$tableauPharmacies = requeteListe($nomTable);


require "assets/inc/header.php";
require "assets/inc/sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <section class="content-header">
          <h1>
              Listes des utilisateurs
          </h1>
      </section>
      <div class="box">
          <div class="box-header"></div>
          <div  class="box-body table-responsive no-padding">
              <table  class="table table-hover">
                  <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Status</th>
                      <th>Supprimer</th>
                  </tr>
                    <?php foreach ($tableauUsers as $tableauUser) {?>
                  <tr>
                      <td><?php echo $tableauUser['nom'];?></td>
                      <td><?php echo $tableauUser['prenom'];?></td>
                      <td><?php echo $tableauUser['status'];?></td>
                      <td>
                          <a href="delete_users.php?id=<?php echo $tableauUser['id'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash-o"></i>
                          </a>
                      </td>
                  </tr>
                    <?php  } ?>
              </table>

          </div>
          <section class="content-header">
              <h1>
                  Listes des pharmacies
              </h1>
          </section>
          <table  class="table table-hover">
              <tr>
                  <th>Nom</th>
                  <th>Adresse</th>
                  <th>Email</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
              </tr>
              <?php foreach ($tableauPharmacies as $tableauPharmacie) {?>
                  <tr>
                      <td ><?php echo $tableauPharmacie['nom'];?></td>
                      <td><?php echo $tableauPharmacie['adresse'];?></td>
                      <td><?php echo $tableauPharmacie['email'];?></td>
                      <td><a href="modif_pharmacie.php?id=<?php echo$tableauPharmacie['id']?>" class=".btn.btn-app"><i class="fa fa-edit"></i></a></td>
                      <td>
                          <a href="delete_pharmacie.php?id=<?php echo $tableauPharmacie['id'];?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i class="fa fa-trash-o"></i>
                          </a>
                      </td>

                  </tr>
              <?php  } ?>
          </table>
          <!-- Fin body -->
      </div>




  </div>
  <!-- /.content-wrapper -->

<?php

require "assets/inc/footer.php";