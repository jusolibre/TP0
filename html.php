<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:59:23+01:00
@Email:  julien.s@codeur.online
@Filename: html.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T11:15:57+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>html</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>HTML :</h1>
    <p>
      Définition : la balise html est composé de deux morceaux, une balise ouvrante
      <code data-claire-semantic="html">
        &lt;html&gt;<br/>
        ainsi qu'une balise fermante :<br/>
        &lt;/html&gt;
      </code><br/>
      Cette balise est utiliser pour délimiter le début et la fin d'un document html, elle est précèder par une balise
      <strong><span>< </span>!doctype<span>> </span></strong>
      qui vas servir a préciser au navigateur de quelle manière comprendre la page, ici comme une page web.
    </p><br/>
  </body>

  <footer>
    <br/><br/>
    <div class="float"><a href="https://twitter.com/VincentTime0"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\perso-vincentimes.html">Contact VincenTimes</a><br/></div>
  <div class="float"><a href="https://twitter.com/julien_grimm"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/profile.php?id=100014175188748&fref=ts"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a>  <a href="Contact\julien\index.html">Contact Julien GRIMM</a><br/></div>
<div class="float"><a href="https://twitter.com/dantikevin"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\danti-kevin.html">Contact Kevin DANTI</a><br/></div>
    <div class="float"><a href="https://twitter.com/thomasmartins31"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/thomas.martins.7712"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\thomas-martin.html">Contact Thomas MARTIN</a><br/></div>
  </footer>
</html>
