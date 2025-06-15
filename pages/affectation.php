 
   <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$affectations = getAllAffectations();

//var_dump($utilisateurs);

?>
 
 
 <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des affectations</h3>

                  <a class="ajouter_nouvel btn btn-primary" href="index.php?action=nouvelleAffectation">Nouvelle affectation</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date de création</th>
                                <th scope="col">Utilisateurs</th>
                                <th scope="col">Institut</th>
                                <!-- <th scope="col">Instituts</th> -->
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                     <?php
                        $id = 1;
                        foreach ($affectations as $aff) {
                        ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php   echo $aff['titre']; ?></td>
                                <td><?php   echo $aff['description']; ?></td>
                                <td><?php   echo $aff['dateCreation']; ?></td>
                                <td><?php   echo $aff['id_utilisateur']; ?></td>
                                <td><?php   echo $aff['id_institut']; ?></td>
                                <!-- <td>universitaire de San-pédro</td> -->
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                            </tr>


                   <?php $id++;   } ?>
                        </table> 
                    </div>