
   <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$etudiants = getAllEtudiants();

//var_dump($utilisateurs);

?>
  
  
  
  <div class="section container mt-4">
                <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des etudiants</h3>

                  <a class="ajouter_nouvel btn btn-primary " href="index.php?action=ajouterEtudiant">Nouvel étudiant</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Adresse</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Matricule</th>
                                <th>Niveau</th>
                                <th>Filiere</th>
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
                                <td><?php   echo $etu['nom']; ?></td>
                                <td><?php   echo $etu['adresse']; ?></td>
                                <td><?php   echo $etu['sexe']; ?></td>
                                <td><?php   echo $etu['telephone']; ?></td>
                                <td><?php   echo $etu['email']; ?></td>
                                <td><?php   echo $etu['matricule']; ?></td>
                                <td><?php   echo $etu['niveau']; ?></td>
                                <td><?php   echo $etu['id_filiere']; ?></td>
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                                
                            </tr>

                              <?php $id++;   } ?>

                        </table> 
                    </div>
</div>