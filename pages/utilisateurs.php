 <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$utilisateurs = getAllUsers();

//var_dump($utilisateurs);

?>
 
 
 <div class="section container">
                <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des utilisateurs</h3>

                  <a class="ajouter_nouvel  btn btn-primary" href="index.php?action=ajouterUtilisateur">Nouvel utilisateur</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $id = 1;
                        foreach ($utilisateurs as $user) {
                        ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php   echo $user['username']; ?></td>
                                <td><?php  echo $user['nom']; ?></td>
                                <td><?php  echo $user['prenom']; ?></td>
                                <td><?php  echo $user['email']; ?></td>
                                <td><?php  echo $user['adresse']; ?></td>
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                                
                            </tr>

                        <?php $id++;   } ?>
                           
                        </table> 
                    </div>
</div>