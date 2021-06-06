<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="menu.css">
    </head>
    
    <body>
    <?php
             $servername = 'localhost';
             $username = 'root';
             $password = 'root';
             
             //On essaie de se connecter
             try{
                 $conn = new PDO("mysql:host=$servername;dbname=bddtest", $username, $password);
                 //On définit le mode d'erreur de PDO sur Exception
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 echo 'Connexion réussie';
             }
             
             /*On capture les exceptions si une exception est lancée et on affiche
              *les informations relatives à celle-ci*/
             catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
             }
    ?>
        <h1>Mon site</h1>
        <form method='post' action='index.php'>
            <label for='mail'>Entrez une adresse mail ici :</label>
            <input type='email' id='mail' name='mail'><br>
            
            <input type='submit' value='Envoyer'>
        <?php
            include 'menu.php';
            $prenom = "Tom";
            $role = "Administrateur" ;
            function bonjour($prenom, $role){
                echo 'Bonjour ' .$prenom. ' vous êtes un(e) ' .$role. '.<br>';
            }
            bonjour($prenom, $role);
            echo "Aujourd'hui on est " ;
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y') ;

            require 'user.class.php';
           
            $pierre = new Utilisateur('Pierre', 'abcdef');
            $mathilde = new Utilisateur('Math', 123456);
            
            echo $pierre->getNom(). '<br>';
            echo $mathilde->getNom(). '<br>';

            if(isset($_POST['mail'])){
                $m = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
                echo 'Valeur retenue : ' .$m.
                     '<br> Valeur originale : ' .$_POST['mail']. '<br>';
                if(filter_var($m, FILTER_VALIDATE_EMAIL)){
                    echo $m. ' ressemble à une adresse mail valide <br>';
                }else{
                    echo $m. ' ne ressemble pas à une adresse mail valide <br>';
                }
            }
            
        ?>
    </body>
</html>