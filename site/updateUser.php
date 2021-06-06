<?php
include ('app.php');
include ('User.php');
include ('UserModel.php');
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$action = $_POST["action"];
$id = $_POST["id"];
$user = new User($id,$firstname,$lastname,$password,$email);
$userModel = new UserModel(new Connexion());
if ($action == "Update"){
$user=$userModel->update($user);
}
if ($action == "Delete"){
$user=$userModel->delete($user);
}
    ?>