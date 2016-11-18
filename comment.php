<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:59:08+01:00
@Email:  julien.s@codeur.online
@Filename: comment.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:32:45+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Comment</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>COMMENT :</h1>
    <p>
      Définition : balise utilisée pour placer un commentaire, il n'est pas visible directement dans la page.<br/>
      Il permet de laisser des informations sur son code html afin de permettre aux autre développeur de comprendre notre travail.
    </p>
    <h2>EXEMPLE :</h2>
    <p>
      &lt;!-- une tel ligne en code reél ne serai pas visible sans inspecter le code de la page, ce que je vous invite a faire <b>CTRL + U</b> pour voir l'effet d'un commentaire --&gt;
      <!--voici l'apparence d'un commentaire éffectif ! -->
    </p>
  </body>

    <?php include("footer.php"); ?>
</html>
