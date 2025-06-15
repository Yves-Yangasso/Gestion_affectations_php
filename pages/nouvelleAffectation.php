       
  <?php

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$instituts = getAllInstitut();

  $message = "";
  
   if(isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $institut = $_POST['institut'];
    $utilisateur = $_SESSION['id'];

    $ins = setAffectation($titre, $description, $institut, $utilisateur);
        header('location:index.php?action=affectation');
    if($ins){
        
    }else{
        $message = "impossible d'ajoute l'institut";
    }

 }
  
  
  ?>
   
   
   
   <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvelle affectation</h3>
            <form action="" method="POST">

                <div class="row">
                    <div class="col-lg-6">
                          <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="col-lg-6">
    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-12">
                           <label for="adresse" class="form-label">Instituts</label>
                   
                    <select class="form-select" id="institut" name="institut" required>
                        <option disabled selected value="">_________________Veuillez selectionner un institut________________ </option>
                        
                          <?php
                        foreach ($instituts as $institut) {
                        ?>
                        <option value="<?php   echo $institut['id_institut']; ?>"><?php   echo $institut['nom']; ?></option>
                         <?php   } ?> 

                    </select>
                    </div>
                   
                </div>
        
                  
                   
<!-- 
                    <option disabled selected value="">_________________Veuillez selectionner l'utilisateur________________</option>
                    <option value="1">Utilisateur 1</option>
                    <option value="2">Utilisateur 2</option>
                    <option value="3">Utilisateur 3</option>
                    </select> -->



                        <button type="submit" name="submit" class=" btn btn-primary mt-2">Ajouter</button>
            </form>

        </div>
        <!-- <div class="container">
            <h2>Ajouter un nouvel utilisateur</h2>
            <form action="ajouterUtilisateur.php" method="POST">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
    
                <div class="mb-3">
                    <label for="motDepasse" class="form-label">Mot de passe</label>
                    <input type="text" class="form-control" id="motDepasse" name="motDepasse">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div> -->

    </div>