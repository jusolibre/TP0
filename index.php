<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: index.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T12:01:01+01:00
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
        Pour des suggestions envoyer nous un message </section>

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
  <footer>
    <br/><br/>
    <div class="float"><a href="https://twitter.com/VincentTime0"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\perso-vincentimes.html">Contact VincenTimes</a><br/></div>
  <div class="float"><a href="https://twitter.com/julien_grimm"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/profile.php?id=100014175188748&fref=ts"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a>  <a href="Contact\julien\index.html">Contact Julien GRIMM</a><br/></div>
<div class="float"><a href="https://twitter.com/dantikevin"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\danti-kevin.html">Contact Kevin DANTI</a><br/></div>
    <div class="float"><a href="https://twitter.com/thomasmartins31"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/thomas.martins.7712"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\thomas-martin.html">Contact Thomas MARTIN</a><br/></div>
  </footer>
</html>
