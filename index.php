<?php

session_start();

if(!isset($_SESSION['email'])){
    header('location:./pages/login.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/css.css">
</head>
<body style="background-image: url('https://www.timeshighereducation.com/cms-academic/sites/default/files/migrated_institution_images/campus_angers-2_new.jpg'); background-repeat: no-repeat; background-size: cover;">
   <div class="row">
        <div class="col-lg-3">
            <?php include ("./pages/header.php") ?>
        </div>
        <div class="col-lg-9">

            <div class="d-flex justify-content-between align-content-center rounded shadow-lg bg-body-tertiary mt-2 border-0">
                <input type="text" name="rechercher" id="" placeholder="Recherche..." class="form-control w-50 m-2" >

                <div class="d-flex justify-content-between align-content-center ">
                    <img src="./images/1.jpg" alt="" srcset="" class="rounded-pill me-3" width="50" height="50">
                </div>
            </div>

            <div class="container m-3">
                <?php 
                    if(isset($_GET['action'])){
                        $action = $_GET['action'];

                        include ('./pages/'.$action.'.php');
                    }
                
                ?>
            </div>
        </div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>