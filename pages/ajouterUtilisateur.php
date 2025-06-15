  
  <?php

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

  $message = "";
  
   if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $mdp = $_POST['mdp'];

    $user = setUtilisateur($username, $nom, $prenom,$email, $adresse, $mdp);
        header('location:index.php?action=utilisateurs');
    if($user){
        
    }else{
        $message = "impossible d'ajoute l'utilisateur";
    }

 }
  
  
  ?>
  
  
  
  <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvel utilisateur</h3>
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
                    
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-lg-6">

                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                     <label for="motDepasse" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="col-lg-6">
                     <label for="motDepasse" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="motDepasse" name="mdp">
                </div>
              
            </div>
      
                
                <button type="submit" name="submit" class="btn btn-primary mt-2">Ajouter</button>
            </form>

        </div>
    </div>