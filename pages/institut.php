 <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$instituts = getAllInstitut();

//var_dump($utilisateurs);

?>



            <div class="section container">
                <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des instituts</h3>

                  <a class="ajouter_nouvel btn btn-primary" href="index.php?action=ajouterInstitut">Nouvel institut</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                         <?php
                        $id = 1;
                        foreach ($instituts as $institut) {
                        ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php   echo $institut['nom']; ?></td>
                                <td><?php   echo $institut['adresse']; ?></td>
                                <td><?php   echo $institut['telephone']; ?></td>
                                <td><?php   echo $institut['email']; ?></td>
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                            </tr>

                             <?php $id++;   } ?>

                            <!-- <tr>
                                <td>2</td>
                                <td>Traoré</td>
                                <td>Fatou</td>
                                <td>traorefatou@gmail.com</td>
                                <td>abidjan BP02</td>
                                <td>
                                    <a href="#" class="btn btn modifier">Modifier</a>
                                    <a href="#" class="btn btn supprimer">Supprimer</a>
                                </td>
                            </tr> -->
                        </table> 
                    </div>
</div>