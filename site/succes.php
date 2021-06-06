<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>succes</title>
</head>
<body>
    <?php
    include ('app.php');
    include ('User.php');
    include ('UserModel.php');
    //Instantiation user model
    $userModel = new UserModel(new Connexion());
    echo "<h1> Succes ! </h1>";
    //Recuperation du l'emal dans l'url
    // echo $_GET['email'];
    //Appel de la methode get de userModel pour retourner une USer.
    try{
    $user=$userModel->getUserById($_GET['id']);
    }
    catch (Exception $e) {
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        die();
    }
    //Affichage du FullName du user.
    //echo $user->getFullName();
    //$fullname = user->getFullName();
    // faire le bouton delete 
    // passer par l'id dans le lien et non par l'email
    // faire des messages d'erreur 
    // faire le tableau 
    ?>
    <h1>Formulaire HTML</h1>
        
        <form action="updateUser.php" method="post">
         <div class="c100">
                <label for="firstname">First Name : </label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $user->getFirstName() ?>">
            </div>
            <div class="c100">
                <label for="lastname">Last Name : </label>
                <input type="text" id="lastname" name="lastname" value="<?php echo $user->getLastName() ?>">
            </div>
            <div class="c100">
                <label for="email">Email : </label>
                <input type="email" id="email" name="email"value="<?php echo $user->getEmail() ?>">
            </div>
            <div class="c100">
                <label for="password">Password : </label>
                <input type="password" id="password" name="password"value="<?php echo $user->getPassword() ?>">
            </div>
            <div class="c100">
                <input type="hidden" id="id" name="id"value="<?php echo $user->getId() ?>">
            </div>
            <div class="c100" id="update">
                <input type="submit" name ="action" value="Update">
            </div>
            <div class="c100" id="userlist">
            <button><a href="userList.php">UserList</a></button>
            </div>
            
        </form>
</body>
</html>