<?php
session_start();
//if (isset($_POST[]));
//$_SESSION['user'] = $_POST['pseudo'];
//$_SESSION['score'] = $value;
?>

<html>
  <head>
    <meta charset="utf-8">
      <title> PHP </title>
      <!--ICI LINKEZ VOTRE FICHIER CSS-->
      </head>
    <body>
    <header>
            <h1>TEAM BIG POULAX DANS LE BATODOMONDAX</h1>
    </header>
    <form action="database.php" method="post"> <!--ici on "link" le fichier database.php au formulaire pour les attributs name je met Ida car c'est ma premiere valeur dans la table de ma base de données par exemple si vous avez nom alors mettez name="nom" etc...-->
     <p>nom</p><input onkeyup="verif_nombre(this);" class="nom" name="nom" id="value1" type="text" placeholder="_ _" maxlength="12" autocomplete="off"/>
      <p>prénom</p><input onkeyup="verif_nombre(this);" class="prénom" name="prenom" id="value2" type="text" placeholder="_ _" maxlength="15" autocomplete="off"/>
      <p>Age</p><input onkeyup="verif_nombre(this);" class="chiffre" name="lol" id="value3" type="text" placeholder="_ _" maxlength="2" autocomplete="off"/>
      <p>Combien de boulax dans le bato ?</p><input onkeyup="verif_nombre(this);" class="texte" name="bato" id="value4" type="text" placeholder="_ _" maxlength="10" autocomplete="off"/>
      <br>
      <input id="submit" type="submit" name="VALIDER" value="submit">
      <input type="hidden" value="hidden_field" name="hidden_field">
    </form>

  <img src="re.gif">
  <img src="shark.jpg">
  <img src="cat.jpg">


  
    </body>
</html>
