<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'Lastname : '.$_POST["lastname"].'<br>';
            echo 'Firstname : ' .$_POST["firstname"].'<br>';
            echo 'email : ' .$_POST["email"].'<br>';
            echo 'Password : ' .$_POST["password"].'<br>';
        ?>
    </body>
</html>