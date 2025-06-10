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
                    <div class="col-lg-6">
                         <label for="dateCreation" class="form-label">Date de création</label>
                    <input type="date" class="form-control" id="dateCreation" name="dateCreation" required>
                    </div>
                    <div class="col-lg-6">
 <label for="adresse" class="form-label">Utilisateurs</label>
                   
                    <select class="form-select" id="utilisateur" name="utilisateur" required>
                        <option disabled selected  value="">_________________Veuillez selectionner l'utilisateur________________ </option>
                        <option value="1">Utilisateur 1</option>
                        <option value="2">Utilisateur 2</option>
                        <option value="3">Utilisateur 3</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                           <label for="adresse" class="form-label">Instituts</label>
                   
                    <select class="form-select" id="utilisateur" name="utilisateur" required>
                        <option disabled selected value="">_________________Veuillez selectionner un institut________________ </option>
                        <option value="1">Institut 1</option>
                        <option value="2">Institut 2</option>
                        <option value="3">Institut 3</option>

                    </select>
                    </div>
                   
                </div>
        
                  
                   
<!-- 
                    <option disabled selected value="">_________________Veuillez selectionner l'utilisateur________________</option>
                    <option value="1">Utilisateur 1</option>
                    <option value="2">Utilisateur 2</option>
                    <option value="3">Utilisateur 3</option>
                    </select> -->



                        <button type="submit" class=" ">Ajouter</button>
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