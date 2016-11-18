<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: index.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T23:01:24+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Page d'accueil</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
        <section="article">
        <p>Pour des suggestions envoyer nous un message </section></p>

           <p id="table">

                 <label for="pseudo">Votre Pseudo</label>
                 <input type="text" name="pseudo"/></br>

                 <label for="eMail">Votre eMail</label>
                 <input type="text" name="eMail"/></br>

                 Commentaire

                 <textarea name="ameliorer" id="ameliorer" rows="6" cols="30"></textarea>

                 <input type="submit" value="Envoyer" />

            </p>
  </body>

      <?php include("footer.php"); ?>
</html>
