<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: input.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T22:52:34+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Input</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>la balise input</h1>
    <p>
      pratiquement indispensable, la balise input permet d'interagir avec le serveur. <br/>
      grace a cette balise, vous pouvez creer des boutons, des cases a cocher , des cases d'identifiant.
    </p>
    <p>pour utiliser une balise input, vous devrez faire comme suivant: <strong> &lt; input type="button" name="name" value="&gt; </strong></p>
    <p>
      voici un exemple:<br/>
      <a href="index.html"><input type="button" value="accueil" /></a>
    </p>
    </body>


        <?php include("footer.php"); ?>
</html>
