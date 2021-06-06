<?php
include ('app.php');
include ('User.php');
include ('UserModel.php');
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$user = new User(null, $firstname, $lastname, $password, $email);
$userModel = new UserModel(new Connexion());
try {
    $user = $userModel->create($user);

    header("Location:succes.php?id=".$user->getId());
    //
}
catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

    ?>