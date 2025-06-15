   
  <?php

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$filieres = getAllFiliere();

  $message = "";
  
   if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $sexe = $_POST['sexe'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $matricule = $_POST['matricule'];
    $niveau = $_POST['niveau'];
    $filiere = $_POST['filiere'];
    
    $user = setEtudiant($nom,$adresse,$sexe, $telephone, $matricule,$email, $niveau, $filiere);
        header('location:index.php?action=etudiant');
    if($user){
        
    }else{
        $message = "impossible d'ajoute l'utilisateur";
    }

 }
  
  
  ?>
 
 
 <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvel etudiant</h3>
            <form action="" method="POST">


            <div class="row">
                <div class="col-lg-6">
                       <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="col-lg-6">
                      <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                     
                     <label for="adresse" class="form-label">Adresse</label>
                     <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <div class="col-lg-6">
                     <label for="sexe">Sexe</label>
                     <select name="sexe" id="sexe" class="form-control">
                        <option disabled selected value="">____________Selectionnez le sexe_______________</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                     </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                     <label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="col-lg-6">
                      <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                     <label for="matricule">Matricule</label>
                    <input type="text" class="form-control" id="matricule" name="matricule" required>
                </div>
                <div class="col-lg-6">
                      <!-- <label for="niveau">Niveau</label> -->
                    <label for="niveau">Niveau</label>
                    <select name="niveau" id="niveau" class="form-select">
                        <option disabled selected value="">____________Selectionnez le niveau_______________</option>
                        <option value="Licence 1">Licence 1</option>
                        <option value="Licence 2">Licence 2</option>
                        <option value="Licence 3">Licence 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">Master 2</option>
                        <option value="Doctorat">Doctorat</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                     <label for="filiere">Filière</label>
                    <select name="filiere" id="filiere" class="form-select">
                        <option disabled selected value="">____________Selectionnez la filière_______________</option>


                      <?php
                        foreach ($filieres as $fil) {
                        ?>
                        <option value="<?php  echo $fil['id_filiere'];  ?>"><?php  echo $fil['libelle']; ?></option>
                     <?php    } ?> 
                    </select>
                </div>
               
            </div>
        
                 
    
                <button type="submit" name="submit" class="btn btn-primary mt-2">Ajouter</button>
            </form>

        </div>
    </div>