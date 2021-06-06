<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete page</h1>
    <?php
        include ('app.php');
        include ('User.php');
        include ('UserModel.php');
        $userModel = new UserModel(new Connexion());
        try{
            $user=$userModel->getUserById($_GET['id']);
            }
            catch (Exception $e) {
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
                die();
            }
            ?>
    <form action="updateUser.php" method="post">
            <div class="c100">
                <input type="hidden" id="id" name="id" value="<?php echo $user->getId() ?>">
            </div>
    <div class="c100" id="delete">
                <input type="submit" name ="action" value="Delete">
    </div>
</form>
</body>
</html>