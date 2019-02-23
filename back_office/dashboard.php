<?php

require "../assets/inc/pdo.php";
require "../assets/inc/request.php";
require "../assets/inc/fonctions.php";


$nomTable = 'user';
$tableauUsers = requeteListe($nomTable);


require "assets/inc/header.php";
require "assets/inc/sidebar.php";
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="box">
          <div class="box-header"></div>
          <div  class="box-body table-responsive no-padding">
              <table  class="table table-hover">
                  <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Status</th>
                      <th>Supprimer</th>
                  </tr>
                    <?php foreach ($tableauUsers as $tableauUser) {?>
                  <tr>
                      <td><?php echo $tableauUser['id'];?></td>
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
          <!-- Fin body -->
      </div>




  </div>
  <!-- /.content-wrapper -->

<?php

require "assets/inc/footer.php";