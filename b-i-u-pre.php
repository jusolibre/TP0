<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: b-i-u-pre.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T22:42:26+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>B I U Pre</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message.
    </p>
    <h1>B :</h1>
    <p>
      Définition : balise utilisée pour mettre <b>un texte en gras.</b>
    </p>
    <h1>I :</h1>
    <p>
      Définition : balise utilisée pour mettre <i>un texte en italique.</i>
    </p>
    <h1>U :</h1>
    <p>
      Définition : balise utilisée pour <u>souligner un texte.</u>
    </p>
    <h1>PRE :</h1>
    <p>la balise pre permet d'utiliser un formatage speciale</p>
      <pre>tel que   celui-ci</pre>
    <p>
      comme on peut le voir il ajoute automatiquement un saut de ligne avec et apres,
      il annule aussi le pre-parsing du html ce qui permet de placer plusieurs espaces de suite.
    </p>
  </body>

    <?php include("footer.php"); ?>
</html>
