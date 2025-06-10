 <div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3">Ajouter un nouvel etudiant</h3>
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
                     
                     <label for="adresse" class="form-label">Adresse</label>
                     <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <div class="col-lg-6">
                     <label for="sexe">Sexe</label>
                     <select name="sexe" id="sexe">
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
                        <option value="Informatique">Informatique</option>
                        <option value="Mathematiques">Mathematiques</option>
                        <option value="Physique">Physique</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Biologie">Biologie</option>
                        <option value="Sciences de la Terre">Sciences de la Terre</option>
                        <option value="Sciences Economiques">Sciences Economiques</option>
                        <option value="Sciences Sociales">Sciences Sociales</option>
                        <option value="Sciences de l'Ingénieur">Sciences de l'Ingénieur</option>
                        <option value="Sciences de la Santé">Sciences de la Santé</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <label for="utilisateur">Utilisateur</label>
                    <select name="" id="">
                        <option disabled selected value="">____________Selectionnez le type d'utilisateur_______________</option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Enseignant">Enseignant</option>
                        <option value="Administrateur">Administrateur</option>
                    </select>
        
                </div>
            </div>
        
                 
    
                <button type="submit" class="">Ajouter</button>
            </form>

        </div>
    </div>