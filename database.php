<?php
//ici je me connecte une premiere fois à la database pour afficher les données en aléatoire blabla est le nom de ma database dans phpmyadmin
//try
//{
//   $bdd = new PDO('mysql:host=localhost;dbname=esdquizz;charset=utf8', 'root', 'root');
//}
//catch(Exception $e)
//{
//    die('Erreur : '.$e->getMessage());
//}

//ici je me connecte une seconde fois à la database pour envoyer les données root est aussi bien mon identifiant que mon mot de passe et j'indique ma base de données
$link = mysqli_connect("localhost", "root", "root", "esdquizz");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//ici je déclare mes variables à modifier on retrouve les fameux Ida Idb Idc Idd qui sont en fait vos propres critères de formulaire
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$lol = mysqli_real_escape_string($link, $_REQUEST['lol']);
$bato = mysqli_real_escape_string($link, $_REQUEST['bato']);



//ici j'insère mes données de formulaire dozen est le nom de ma table si vous avez une table qui s'appelle jenesaispasquoi vous mettez jenesaispasquoi
$sql = "INSERT INTO albe (nom, prenom, lol, bato) VALUES ('$nom', '$prenom', '$lol', '$bato')";

//ici je vérifie que si je réussi ca m'affiche un premier message sinon Error
if (mysqli_query($link, $sql))  {

    echo "regis suce pour une canette de fanta ";
} else{
    echo "ERROR: Impossible d'enregistrer $sql. " . mysqli_error($link);
}

$tableaux = array("question1.php","question2.php");
$rand = rand(0,1);
$resultat = include($tableaux[$rand]);

?>

<input type="hidden" value="<php echo $resultat; ?>" name="hidden_field">
<?php

//ce bout de code m'indique qu'il faut que j'affiche une variable aléatoire par exemple ici je veux que le critère Ida soit affiché aléatoirement parmi ses valeurs
// while ($donnees = $reponse->fetch()) {
    //  echo $donnees['nom'];
    //  echo $donnees['prenom'];
    //  echo $donnees['lol'];
    // echo $donnees['bato'];
 //}

//: essayez de rentrer plusieurs valeurs dans le formulaire au début afin d'en avoir un maximum pour l'aléatoire





//ici on ferme la connexion
mysqli_close($link);
?>
