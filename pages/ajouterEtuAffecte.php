
     
  <?php

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

$affectations = getAllAffectations();

$etudiants = getAllEtudiants();

  $message = "";
  
   if(isset($_POST['submit'])){
    $affectation = $_POST['affectation'];
    $etudiant = $_POST['etudiant'];

    $ins = setEtuAffecte($affectation, $etudiant);
        header('location:index.php?action=etudiantAffecte');
    if($ins){
        
    }else{
        $message = "impossible d'ajoute de la filiere";
    }

 }
  
  
  ?>
  
<div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3"> Nouvelle affectation d'un étudiant</h3>
            <form action="" method="POST">

                <div class="row">
                   <div class="col-lg-6">
                        
                      <label for="adresse" class="form-label">Affectation</label>
                    <select class="form-select" id="affectation" name="affectation" required>
                        <option disabled selected value="">_________________Affectation________________ </option>
                      
                       <?php
                        foreach ($affectations as $aff) {
                        ?>

                        <option value="<?php  echo $aff['id_affectation']; ?>"><?php echo $aff['titre']; ?> </option>

                        <?php $id++;   } ?>
                    </select>
                    </div>


                    <div class="col-lg-6">
                             <label for="adresse" class="form-label">Etudiant</label>
                   
                    <select class="form-select" id="etudiant" name="etudiant" required>
                        <option disabled selected  value="">_________________Choisissez l'étudiant________________ </option>
                        
                             <?php
                        foreach ($etudiants as $etu) {
                        ?>
                        <option value="<?php echo $etu['id_etudiant']; ?>"><?php  echo $etu['nom']; ?></option>
                      <?php $id++;   } ?>
                    </select>
                    </div>
                </div>

                    <button type="submit" name="submit" class="btn btn-primary mt-3">Ajouter</button>
            </form>
        </div>