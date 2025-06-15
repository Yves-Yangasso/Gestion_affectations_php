<?php
include_once "../db/db_connexion.php";
include_once "../db/fonctions.php";

$message = "";

session_start();

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $user = checkConnexion($email, $mdp);

    if($user){
        if($user['email'] == $email && $user['motDepasse'] == $mdp){
        $_SESSION['email'] = $user['email'] ;
        $_SESSION['id'] = $user['id_utilisateur'] ;

        header('location:../index.php');
    }else{
        $message = "Mot de passe incorrect !!!";
    }
    }else{
        $message = "Mot de passe incorrect !!!";
    }
 
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body style="background-image: url('https://www.timeshighereducation.com/cms-academic/sites/default/files/migrated_institution_images/campus_angers-2_new.jpg'); background-repeat: no-repeat; background-size: cover;">

<div class="container">
    <div class="card mt-5 w-50 offset-3">
        <div class="card-header text-center">
                <h3>
                    Connexion
                </h3>
        </div>
        <div class="card-body m-2">
          <form action="" method="post">
              <div class="mt-3">
                <input type="text" name="email" id="" class="form-control" placeholder="Veuillez saisir votre adresse email">
            </div>
            <div class="mt-3">
                <input type="text" name="mdp" id="" class="form-control" placeholder="Veuillez saisir votre mot de passe">
            </div>
            <div class="mt-3">
                <input type="submit" name="submit" id="" class="btn btn-primary w-100" value="Se connecter">
            </div>

            <div class="mt-2 text-danger">
                <p>
                    <?php 
                    
                    if(isset($message)){
                        echo $message;
                    }
                    
                    ?>
                </p>
            </div>
          </form>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>