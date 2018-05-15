<html>
  <head>
    <meta charset="utf-8">
      <title> PHP </title>
      <!--ICI LINKEZ VOTRE FICHIER CSS-->
      </head>
    <body>
    <header>
            <h1>TEAM BIG POULAX DANS LE BOTADOMONDAX</h1>
    </header>

    <form action="database2.php" method="post"> <!--ici on "link" le fichier database.php au formulaire pour les attributs name je met Ida car c'est ma premiere valeur dans la table de ma base de données par exemple si vous avez nom alors mettez name="nom" etc...-->
      <p>Combien de boulax dans le bato ?</p><input onkeyup="verif_nombre(this);" class="texte" name="bato" id="value4" type="text" placeholder="_ _" maxlength="10" autocomplete="off"/>
      <br>
      <input id="submit" type="submit" name="VALIDER" value="submit">
      <input type="hidden" value="hidden_field" name="hidden_field">
    </form>

  <img src="master.png">

    </body>
</html>
