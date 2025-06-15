

 <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$etudiants = getAllEtuAffecte();

//var_dump($utilisateurs);

?>
  
          <div class="section container">
                <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des étudiants affectés</h3>

                  <a class="ajouter_nouvel btn btn-primary" href="index.php?action=ajouterEtuAffecte">Nouvelle affectation</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Date d'affectation</th>
                                <th scope="col">Etudiant</th>
                                <th scope="col">Affectation</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                     <?php
                        $id = 1;
                        foreach ($etudiants as $etu) {
                        ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php   echo $etu['dateAf']; ?></td>
                                <td><?php   echo $etu['id_etudiant']; ?></td>
                                <td><?php   echo $etu['id_affectation']; ?></td>
                                <!-- <td>universitaire de San-pédro</td -->
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                            </tr>

                     <?php $id++;   } ?>
                        </table> 
                    </div>
</div>