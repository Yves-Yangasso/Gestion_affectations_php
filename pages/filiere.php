
 <?php 

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$filieres = getAllFiliere();

//var_dump($utilisateurs);

?>
            <div class="section container">
                <div class="d-flex justify-content-around  align-items-center ">
                    <h3 class="gestUtilisateurs">Gestion des filières</h3>

                  <a class="ajouter_nouvel btn btn-primary" href="index.php?action=nouvelleFiliere">Nouvelle filière</a>
               </div>
                <hr class="">
                <!-- <img src="/images/AFF.jpeg" alt=""> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Libellé</th>
                                <th scope="col">Description</th>
                                
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php
                        $id = 1;
                        foreach ($filieres as $fil) {
                        ?>
                            <tr>
                                <td><?php  echo $id; ?></td>
                                <td><?php   echo $fil['libelle']; ?></td>
                                <td><?php   echo $fil['description']; ?></td>
                                <td>
                                    <a  href="#" class="btn btn-success modifier"> Modifier</a>
                                    <a href="#" class="btn btn-danger supprimer"> Supprimer</a>
                                </td>
                                
                            </tr>
                              <?php $id++;   } ?>
                        </table> 
                    </div>
</div>