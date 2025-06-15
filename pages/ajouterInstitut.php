  
    
  <?php

include_once "./db/db_connexion.php";
include_once "./db/fonctions.php";

  $message = "";
  
   if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];

    $ins = setInstitut($nom, $telephone,$email, $adresse);
        header('location:index.php?action=institut');
    if($ins){
        
    }else{
        $message = "impossible d'ajoute l'institut";
    }

 }
  
  
  ?>
  
  
  
  <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvel institut</h3>
            <form action="" method="POST">


                <div class="row">
                    <div class="col-lg-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">

                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <div class="col-lg-6">

                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mt-2">Ajouter</button>
            </form>

        </div>
    </div>