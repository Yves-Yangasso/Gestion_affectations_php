  <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvel utilisateur</h3>
            <form action="ajouterUtilisateur.php" method="POST">


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
                <div class="col-lg-12">
                     <label for="motDepasse" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="motDepasse" name="motDepasse">
                </div>
              
            </div>
      
                
                <button type="submit" class="">Ajouter</button>
            </form>

        </div>
    </div>