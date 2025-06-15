<?php 



function checkConnexion($email, $mdp){
    global $conn;
    $res = $conn->prepare("select * from utilisateurs where email = :email and motDepasse = :mdp");
    $res->bindParam(':email', $email);
    $res->bindParam(':mdp', $mdp);
    $res->execute();

    $user = $res->fetch(PDO::FETCH_ASSOC);

    return $user;
}

function getAllUsers(){
    global $conn;
    $res = $conn->prepare("select * from utilisateurs");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}

function setUtilisateur($username, $nom, $prenom, $email, $adresse, $mdp) {
    global $conn;

    $res = $conn->prepare("INSERT INTO `utilisateurs` (`username`, `nom`, `prenom`, `email`, `adresse`, `motDepasse`) 
        VALUES (:username, :nom, :prenom, :email, :adresse, :mdp)");

    $res->bindParam(':username', $username);
    $res->bindParam(':nom', $nom);
    $res->bindParam(':prenom', $prenom);
    $res->bindParam(':email', $email);
    $res->bindParam(':adresse', $adresse);
    $res->bindParam(':mdp', $mdp);

    if ($res->execute()) {
        return true;
    }

    return false;
}


function setInstitut($nom, $telephone,$email, $adresse) {
    global $conn;

    $res = $conn->prepare("INSERT INTO `instituts` (`nom`, `adresse`, `telephone`, `email`) 
        VALUES (:nom, :adresse,:telephone, :email)");

    $res->bindParam(':nom', $nom);
    $res->bindParam(':adresse', $adresse);
     $res->bindParam(':telephone', $telephone);
    $res->bindParam(':email', $email);

    if ($res->execute()) {
        return true;
    }

    return false;
}


function setFiliere($libelle, $description) {
    global $conn;

    $res = $conn->prepare("INSERT INTO `filieres` (`libelle`, `description`) 
        VALUES (:libelle, :descr)");

    $res->bindParam(':libelle', $libelle);
    $res->bindParam(':descr', $description);

    if ($res->execute()) {
        return true;
    }

    return false;
}


function setEtuAffecte($affectation, $etudiant){
    global $conn;

    $res = $conn->prepare("INSERT INTO `etudiantaffections` (`id_etudiant`, `id_affectation`) 
        VALUES (:etudiant, :affectation)");

   $res->bindParam(':etudiant', $etudiant);
    $res->bindParam(':affectation', $affectation);

    if ($res->execute()) {
        return true;
    }

    return false;
}


function setAffectation($titre, $description, $institut, $utilisateur) {
    global $conn;

    $res = $conn->prepare("INSERT INTO `affectations` (`titre`, `description`, `id_utilisateur`, `id_institut`) 
        VALUES (:titre, :descr, :institut, :utilisateur)");

    $res->bindParam(':titre', $titre);
    $res->bindParam(':descr', $description);
    $res->bindParam(':institut', $institut);
    $res->bindParam(':utilisateur', $utilisateur);

    if ($res->execute()) {
        return true;
    }

    return false;
}

function setEtudiant($nom, $adresse, $sexe, $telephone, $matricule, $email, $niveau, $filiere) {
    global $conn;

    $res = $conn->prepare("INSERT INTO `etudiants` (`nom`, `adresse`, `sexe`, `telephone`, `email`, `matricule`, `niveau`, `id_filiere`)
        VALUES (:nom, :adresse, :sexe, :telephone, :email, :matricule, :niveau, :filiere)");

    $res->bindParam(':nom', $nom);
    $res->bindParam(':adresse', $adresse);
    $res->bindParam(':sexe', $sexe);
    $res->bindParam(':telephone', $telephone);
    $res->bindParam(':email', $email);
    $res->bindParam(':matricule', $matricule);
    $res->bindParam(':niveau', $niveau);
    $res->bindParam(':filiere', $filiere);

    if ($res->execute()) {
        return true;
    }

    return false;
}


function getAllInstitut(){
    global $conn;
    $res = $conn->prepare("select * from instituts");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}


function getAllFiliere(){
    global $conn;
    $res = $conn->prepare("select * from filieres");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}


function getAllEtudiants(){
    global $conn;
    $res = $conn->prepare("select * from etudiants");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}



function getAllAffectations(){
    global $conn;
    $res = $conn->prepare("select * from affectations");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}

function getAllEtuAffecte(){
    global $conn;
    $res = $conn->prepare("select * from etudiantaffections");
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}


?>