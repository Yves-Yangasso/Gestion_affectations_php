
<div class="formulaireUtilisateurs">
        <div>
            <h3 class="shadow p-3 my-3"> Nouvelle affectation d'un étudiant</h3>
            <form action="" method="POST">

                <div class="row">
                    <div class="col-lg-6">
                         <label for="datAf" class="form-label">Date d'affectation</label>
                    <input type="date" class="form-control" id="datAf" name="datAf" required>
                    </div>
                    <div class="col-lg-6">
                             <label for="adresse" class="form-label">Etudiant</label>
                   
                    <select class="form-select" id="utilisateur" name="utilisateur" required>
                        <option disabled selected  value="">_________________Choisissez l'étudiant________________ </option>
                        <option value="1">Etudiant 1</option>
                        <option value="2">Etudiant 2</option>
                        <option value="3">Etudiant 3</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                      <label for="adresse" class="form-label">Affectation</label>
                    <select class="form-select" id="utilisateur" name="utilisateur" required>
                        <option disabled selected value="">_________________Affectation________________ </option>
                        <option value="Université de Cocody">Université de Cocody</option>
                        <option value="Université de Bouaké">Université de Bouaké</option>
                        <option value="Université de Korhogo">Université de Korhogo</option>
                    </select>
                    </div>
                   
                </div>
        
                    <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
            </form>
        </div>