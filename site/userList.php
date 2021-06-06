<?php
include ('app.php');
include ('User.php');
include ('UserModel.php');
$userModel = new UserModel(new Connexion());
$users=$userModel->lister();
echo "<table border=1><tr><td>FullName</td></tr>";
        foreach ($users as $user)  {
        $echouser=$user->getFullName();
        $echoid=$user->getId();
            ?>
            <tr>
            <td><?php echo $echouser ?></td><br>
            <td><a href=succes.php?id=<?php echo $echoid;?>
            >modifer</a></td>
            <td><a href=delete.php?id=<?php echo $echoid;?>
            >supprimer</a></td>
        </tr>
        <?php
        }
        echo "</table>";
        ?>