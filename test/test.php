<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteo</title>
</head>
<body>
<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');
?>
<table>
  <tr>
    <td>&nbsp;</td>
    <td>Knocky</td>
    <td>Flor</td>
    <td>Ella</td>
    <td>Juan</td>
  </tr>
  <tr>
    <td>Race</td>
    <td>Jack Russell</td>
    <td>Poodle</td>
    <td>Streetdog</td>
    <td>Cocker Spaniel</td>
  </tr>
  <tr>
    <td>Age</td>
    <td>16</td>
    <td>9</td>
    <td>10</td>
    <td>5</td>
  </tr>
  <tr>
    <td>Propriétaire</td>
    <td>Belle-mère</td>
    <td>Moi</td>
    <td>Moi</td>
    <td>Belle-soeur</td>
  </tr>
  <tr>
    <td>Habitudes alimentaires</td>
    <td>Mange tous les restes</td>
    <td>Grignotte la nourriture</td>
    <td>Mange copieusement</td>
    <td>Mange jusqu'à ce qu'il éclate</td>
  </tr>
</table>
<?php
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
}
?>

</body>
</html>